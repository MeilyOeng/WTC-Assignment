<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class homeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function agentGrid(){
        return view('agent-grid');
    }

    public function agentSingle(){
        return view('agent-single');
    }

    public function blogGrid(){
        return view('blog-grid');
    }

    public function blogSingle(){
        return view('blog-single');
    }

    public function propertyGrid(){
        return view('property-grid');
    }

    public function propertySingle(){
        return view('property-single');
    }

}
