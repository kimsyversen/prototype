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

        $items = DB::table('program')->select('program.pid as pid')
            ->distinct()
            ->get();



        foreach($items as $item)
        {

            $time = DB::table('program')->select('program.pid as pid', 'program.time_from as time_from', 'program.time_to as time_to',
            'program.confirmed as program_confirmed', 'program.title AS title', 'program.date AS date',
                'program.time_to AS time_to', 'program.description AS program_description',
                'program.location AS program_location', 'program.speaker AS program_speaker',
                'program.confirmed AS program_confirmed', 'program.type AS program_type')
                ->where('program.pid', '=', $item->pid)
                ->distinct()
                ->get();
            $sessions[$item->pid]['pid'] = $item->pid;
            $sessions[$item->pid]['time_from'] = $time[0]->time_from;
            $sessions[$item->pid]['time_to'] = $time[0]->time_to;
            $sessions[$item->pid]['confirmed'] = $time[0]->program_confirmed;
            $sessions[$item->pid]['data'] = $time;
        }


        //For hvert item, trenger også time_from, time_to (det som skal stå i header for parallellsesjon




        return View::make('program')->with('items', $sessions);
    }
} 