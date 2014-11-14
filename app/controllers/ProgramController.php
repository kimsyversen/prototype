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

        //Distcint alle pids, velg fra db, leggg i array av arrays, returner

        /*$items = DB::table('program')
            ->select('program.id AS program_id', 'program.pid AS pid','program.title AS title', 'program.date AS date', 'program.time_from AS time_from',
                'program.time_to AS time_to', 'program.description AS program_description',
                'program.location AS program_location, program.speaker AS program_speaker',
                'program.confirmed AS program_confirmed', 'program.type AS program_type')

            ->get();
        return View::make('program')->with('items', $items);*/

        $items = DB::table('program')->select('program.pid as pid')->distinct()->get();


        foreach($items as $item)
        {
            $arr = DB::table('program')
                ->select('program.id AS program_id', 'program.pid AS pid','program.title AS title', 'program.date AS date', 'program.time_from AS time_from',
                    'program.time_to AS time_to', 'program.description AS program_description',
                    'program.location AS program_location, program.speaker AS program_speaker',
                    'program.confirmed AS program_confirmed', 'program.type AS program_type')
                ->where('program.pid', '=', $item->pid)
                ->get();


            array_push($items, $sessions);
        }


        return View::make('program')->with('items', $sessions);
    }
} 