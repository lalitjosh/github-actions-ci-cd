<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function indexi()
    {
    	return view('index');
    }

    public function blog()

    {
    	return view('blog');
    }

    public function contact()

    {
    	return view('contact');
    }

    public function element()

    {
    	return view('element');
    }

    public function service()
    {
    	return view('service');
    }

    public function portfolio()
    {
    	return view('portfolio');
    }

     public function about()
    {
    	return view('about');
    }
}
