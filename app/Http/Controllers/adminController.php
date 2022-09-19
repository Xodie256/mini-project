<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function all(){
        return view('administrators.courses.all');
    }
    public function allf(){
        return view('administrators.faculty.all');
    }
    public function profile(){
        return view('administrators.profile.index');
    }
    public function c_edits(){
        return view('administrators.courses.edit');
    }
    public function f_edits(){
        return view('administrators.faculty.edit');
    }
}
