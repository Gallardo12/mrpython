<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $blogs = Blog::all();
        return view('welcome', compact('blogs'));
    }

    public function about()
    {
        $blogs = Blog::all();
        return view('about', compact('blogs'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function courses()
    {
        $blogs = Blog::all();
        return view('courses.index', compact('blogs'));
    }
}
