<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class ThirdController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        $data = Blog::find(1);
        dd($data);
        return view('contact');
    }
}
