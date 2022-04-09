<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // return 'INDEX';
        // return view('test.article');
        $title = 'Laravel Blog';
        //return view('index', compact('title'));
        return view('index')->with('fuck', $title);
    }

    public function about(){
        $about = 'About';
        return view('about')->with('shit', $about);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Full-Stack Web Development', 'CI/CD'],
            // 'tools' => ['Vue', 'Laravel', ]
        );
        return view('services')->with($data);
    }
    public function login(){
    //     $data = array(
    //         'title' => 'Services',
    //         'services' => ['Programming', 'CI/CD']
    // );
    // return view('login')->with($data);
        return view('index');
    }


    public function logout(){
    //     $data = array(
    //         'title' => 'Services',
    //         'services' => ['Programming', 'CI/CD']
    // );
    // return view('login')->with($data);
        return view('index');
    }

    public function signup(){
    //     $data = array(
    //         'title' => 'Services',
    //         'services' => ['Programming', 'CI/CD']
    // );
    // return view('register')->with($data);
    return view('signup');
    }
}
