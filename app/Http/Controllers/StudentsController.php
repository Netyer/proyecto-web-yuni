<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function proyect()
    {
        return view('students.proyect');
    }

    public function upload()
    {
        return view('students.upload');
    }

    public function uploaded()
    {
        return view('students.uploaded');
    }
}
