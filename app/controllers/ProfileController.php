<?php
class ProfileController extends BaseController{

    public function index() {
        if(Auth::check())
            return View::make('userprofile')->with('user',  User::find(Auth::id()));
    }
    public function edit()
    {
        if(Auth::check())
            return View::make('userprofile')->with('user',  User::find(Auth::id()));
    }
    public function edit_name()
    {
        if(Auth::check())
        {
            $user = User::find(array('id', Auth::id()))->first();
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $success = $user->save();
            if($success)
                return Redirect::to('/profile')->with('success', 'Navnet ditt ble oppdatert');
            else
                return Redirect::to('/profile')->with('error' , 'Noe gikk galt');
        }
    }
}

