<?php


class UserProgramModel extends Eloquent{
    protected $table = 'user_program';
    public $timestamps = false;

    protected $fillable = ['users_id','program_id'];
} 