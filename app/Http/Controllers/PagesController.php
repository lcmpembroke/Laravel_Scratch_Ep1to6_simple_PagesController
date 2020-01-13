<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('welcome', [
            'foo' => 'this is a string',
            'tasks' => ['task 1','task 2','task 3','task 4']
         ]);
    }


    public function about()
    {
        return view('about');
    }


    public function contact()
    {
        return view('contact');
    }

}
