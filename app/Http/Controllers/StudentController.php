<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('student.index');
    }
}
