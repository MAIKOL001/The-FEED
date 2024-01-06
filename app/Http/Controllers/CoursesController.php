<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class CoursesController extends Controller
{
    //
    public function index(){
  
       return View('1styear');
    }

    public function second()
    {
        $files = File::all();
        return view('2ndyear')->with('files', $files);
    }

    public function third()
    {
        $files = File::all();
        return view('3rdyear')->with('files', $files);
    }

    public function fourth()
    {
        $files = File::all();
        return view('4thyear')->with('files', $files);
    }
}
