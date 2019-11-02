<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController1 extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about' , ['about' => 'membuat project PBO']);
    }
}
