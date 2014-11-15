<?php
class UserProgramController extends BaseController {

    public function index()
    {
        $sessions = array();

        $items = DB::table('user_program')->select('program_id as id')
            ->where('users_id', '=', Auth::id())
            ->get();

        $programsForUsers = null;

        if(Auth::check())
            $programsForUsers = DB::table('user_program')->select('program_id as id')
                ->where('users_id', '=', Auth::id())
                ->get();

        foreach($items as $item)
        {
            $time = DB::table('program')->select('program.id as id', 'program.pid as pid', 'program.time_from as time_from', 'program.time_to as time_to',
                'program.confirmed as program_confirmed', 'program.title AS title', 'program.date AS date',
                'program.time_to AS time_to', 'program.description AS program_description',
                'program.location AS program_location', 'program.speaker AS program_speaker',
                'program.confirmed AS program_confirmed', 'program.type AS program_type')
                ->where('program.id', '=', $item->id)
                ->distinct()
                ->get();
            $sessions[$item->id]['count'] = count($time);
            $sessions[$item->id]['date'] = $time[0]->date;
            $sessions[$item->id]['id'] = $item->id;
            $sessions[$item->id]['time_from'] = $time[0]->time_from;
            $sessions[$item->id]['time_to'] = $time[0]->time_to;
            $sessions[$item->id]['confirmed'] = $time[0]->program_confirmed;
            $sessions[$item->id]['data'] = $time;


            foreach($sessions[$item->id]['data'] as $s)
            {
                if(Auth::check())
                {
                    $onAgenda = UserProgramModel::where(array('program_id' => $s->id, 'users_id' => Auth::id()))->first();

                    if(!is_null($onAgenda))
                        $s->user_has_program_on_agenda = $s->id;
                    else
                        $s->user_has_program_on_agenda = 0;
                }
            }
        }

        return View::make('personal-agenda')->with('items', $sessions);
    }



    public function add()
    {
        //Id som skal addes
        $programId = Input::get('programId');
        $userId = Auth::id();

       $success =  UserProgramModel::insert(array('program_id' => $programId, 'users_id' => $userId));


        if($success == 1)
            return Redirect::back()->with('success', 'Sesjonen ble lagt til i personlig agenda');;

        return Redirect::back()->with('error', 'Noe gikk feil');;

    }

    public function remove()
    {
        $programId = Input::get('programId');
        $userId = Auth::id();

        $delete = UserProgramModel::where(array('program_id' => $programId, 'users_id' => $userId))->delete();

        if($delete == 1)
            return Redirect::back()->with('success', 'Sesjonen ble slettet');;

        return Redirect::back()->with('error', 'Noe gikk feil');;

    }





} 