<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function contact(){

        $header = 'Contact';
        $date = new \DateTime();
        $visited = rand(1,2000);
        return view('pages.contact',compact('header',$header,'date',$date,'visited',$visited));

    }

    public function about(){

        return view('pages.about');
    }
}
