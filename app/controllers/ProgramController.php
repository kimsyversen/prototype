<?php
/**
 * Created by PhpStorm.
 * User: kim
 * Date: 11/13/14
 * Time: 3:39 PM
 */

class ProgramController extends BaseController{
    public function index()
    {

        $sessions = array();

        $items = DB::table('program')->select('program.pid as pid')
            ->distinct()
            ->get();

        foreach($items as $item)
        {

            $time = DB::table('program')->select('program.id as id', 'program.pid as pid', 'program.time_from as time_from', 'program.time_to as time_to',
            'program.confirmed as program_confirmed', 'program.title AS title', 'program.date AS date',
                'program.time_to AS time_to', 'program.description AS program_description',
                'program.location AS program_location', 'program.speaker AS program_speaker',
                'program.confirmed AS program_confirmed', 'program.type AS program_type')
                ->where('program.pid', '=', $item->pid)
                ->distinct()
                ->get();
            $sessions[$item->pid]['count'] = count($time);
            $sessions[$item->pid]['date'] = $time[0]->date;
            $sessions[$item->pid]['pid'] = $item->pid;
            $sessions[$item->pid]['time_from'] = $time[0]->time_from;
            $sessions[$item->pid]['time_to'] = $time[0]->time_to;
            $sessions[$item->pid]['confirmed'] = $time[0]->program_confirmed;
            $sessions[$item->pid]['data'] = $time;


            foreach($sessions[$item->pid]['data'] as $s)
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

        return View::make('program')->with('items', $sessions);
    }

    public function index_id($id)
    {


            $time = DB::table('program')->select('program.pid as pid', 'program.time_from as time_from', 'program.time_to as time_to',
                'program.confirmed as program_confirmed', 'program.title AS title', 'program.date AS date',
                'program.time_to AS time_to', 'program.description AS program_description',
                'program.location AS program_location', 'program.speaker AS program_speaker',
                'program.confirmed AS program_confirmed', 'program.type AS program_type')
                ->where('program.id', '=', $id)
                ->get();

        return View::make('program.1')->with('items', $time);
    }



    public function view_date()
    {
        $sessions = array();

        $data = Input::all();

        $items = null;

        if(isset($data['date']))
        {
            if($data['date'] == 1)
            {
                $items = DB::table('program')->select('program.pid as pid')
                    ->distinct()
                    ->where('program.date', '=', "27-10")
                    ->get();

                foreach($items as $item)
                {

                    $time = DB::table('program')->select('program.id as id', 'program.pid as pid', 'program.time_from as time_from', 'program.time_to as time_to',
                        'program.confirmed as program_confirmed', 'program.title AS title', 'program.date AS date',
                        'program.time_to AS time_to', 'program.description AS program_description',
                        'program.location AS program_location', 'program.speaker AS program_speaker',
                        'program.confirmed AS program_confirmed', 'program.type AS program_type')
                        ->where('program.pid', '=', $item->pid)
                        ->distinct()
                        ->get();
                    $sessions[$item->pid]['count'] = count($time);
                    $sessions[$item->pid]['date'] = $time[0]->date;
                    $sessions[$item->pid]['pid'] = $item->pid;
                    $sessions[$item->pid]['time_from'] = $time[0]->time_from;
                    $sessions[$item->pid]['time_to'] = $time[0]->time_to;
                    $sessions[$item->pid]['confirmed'] = $time[0]->program_confirmed;
                    $sessions[$item->pid]['data'] = $time;


                    foreach($sessions[$item->pid]['data'] as $s)
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

                return View::make('program')->with('items', $sessions);

            }
            //29-10
            else if ($data['date'] == 2)
            {
                $items = DB::table('program')->select('program.pid as pid')
                    ->distinct()
                    ->where('program.date', '=', "29-10")
                    ->get();


                foreach($items as $item)
                {

                    $time = DB::table('program')->select('program.id as id', 'program.pid as pid', 'program.time_from as time_from', 'program.time_to as time_to',
                        'program.confirmed as program_confirmed', 'program.title AS title', 'program.date AS date',
                        'program.time_to AS time_to', 'program.description AS program_description',
                        'program.location AS program_location', 'program.speaker AS program_speaker',
                        'program.confirmed AS program_confirmed', 'program.type AS program_type')
                        ->where('program.pid', '=', $item->pid)
                        ->distinct()
                        ->get();
                    $sessions[$item->pid]['count'] = count($time);
                    $sessions[$item->pid]['date'] = $time[0]->date;
                    $sessions[$item->pid]['pid'] = $item->pid;
                    $sessions[$item->pid]['time_from'] = $time[0]->time_from;
                    $sessions[$item->pid]['time_to'] = $time[0]->time_to;
                    $sessions[$item->pid]['confirmed'] = $time[0]->program_confirmed;
                    $sessions[$item->pid]['data'] = $time;


                    foreach($sessions[$item->pid]['data'] as $s)
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

                return View::make('program')->with('items', $sessions);
            }
            else if($data['date'] == 0) {
                $items = DB::table('program')->select('program.pid as pid')
                    ->distinct()
                    ->get();

                foreach ($items as $item) {

                    $time = DB::table('program')->select('program.id as id', 'program.pid as pid', 'program.time_from as time_from', 'program.time_to as time_to',
                        'program.confirmed as program_confirmed', 'program.title AS title', 'program.date AS date',
                        'program.time_to AS time_to', 'program.description AS program_description',
                        'program.location AS program_location', 'program.speaker AS program_speaker',
                        'program.confirmed AS program_confirmed', 'program.type AS program_type')
                        ->where('program.pid', '=', $item->pid)
                        ->distinct()
                        ->get();
                    $sessions[$item->pid]['count'] = count($time);
                    $sessions[$item->pid]['date'] = $time[0]->date;
                    $sessions[$item->pid]['pid'] = $item->pid;
                    $sessions[$item->pid]['time_from'] = $time[0]->time_from;
                    $sessions[$item->pid]['time_to'] = $time[0]->time_to;
                    $sessions[$item->pid]['confirmed'] = $time[0]->program_confirmed;
                    $sessions[$item->pid]['data'] = $time;


                    foreach ($sessions[$item->pid]['data'] as $s) {
                        if (Auth::check()) {
                            $onAgenda = UserProgramModel::where(array('program_id' => $s->id, 'users_id' => Auth::id()))->first();

                            if (!is_null($onAgenda))
                                $s->user_has_program_on_agenda = $s->id;
                            else
                                $s->user_has_program_on_agenda = 0;
                        }
                    }
                }
                return View::make('program')->with('items', $sessions);
            }
        }
        else
        {
            $items = DB::table('program')->select('program.pid as pid')
                ->distinct()
                ->get();

            foreach ($items as $item) {

                $time = DB::table('program')->select('program.id as id', 'program.pid as pid', 'program.time_from as time_from', 'program.time_to as time_to',
                    'program.confirmed as program_confirmed', 'program.title AS title', 'program.date AS date',
                    'program.time_to AS time_to', 'program.description AS program_description',
                    'program.location AS program_location', 'program.speaker AS program_speaker',
                    'program.confirmed AS program_confirmed', 'program.type AS program_type')
                    ->where('program.pid', '=', $item->pid)
                    ->distinct()
                    ->get();
                $sessions[$item->pid]['count'] = count($time);
                $sessions[$item->pid]['date'] = $time[0]->date;
                $sessions[$item->pid]['pid'] = $item->pid;
                $sessions[$item->pid]['time_from'] = $time[0]->time_from;
                $sessions[$item->pid]['time_to'] = $time[0]->time_to;
                $sessions[$item->pid]['confirmed'] = $time[0]->program_confirmed;
                $sessions[$item->pid]['data'] = $time;


                foreach ($sessions[$item->pid]['data'] as $s) {
                    if (Auth::check()) {
                        $onAgenda = UserProgramModel::where(array('program_id' => $s->id, 'users_id' => Auth::id()))->first();

                        if (!is_null($onAgenda))
                            $s->user_has_program_on_agenda = $s->id;
                        else
                            $s->user_has_program_on_agenda = 0;
                    }
                }
            }
            return View::make('program')->with('items', $sessions);
        }
    }
} 