<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Faculty;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function form(){
        
        return view('administrators.forms.create');
    }
    public function all(){
        return view('administrators.courses.all');
    }
    public function alld(){
        return view('administrators.departments.edit')->with(
            'faculties', Faculty::orderBy('updated_at','DESC')->get() 
        );
    }
    public function allf(){
        return view('administrators.faculty.all');
    }
    public function profile(){
        return view('administrators.profile.index');
    }
   
    public function f_edits(){
        return view('administrators.faculty.edit');
    }

    public function units(){
        return view('administrators.units.add')
        ->with('users',User::orderBy('updated_at','DESC')->get())
        ->with('courses', Course::orderBy('updated_at','DESC')->get());
        
    }
}
