<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = "Welcome To Laravel";
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = "Welcome To Laravel";
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Welcome to Contact us',
            'services' => ['Php Design', 'Laravel', 'symphony']
        );
        return view('pages.services')->with($data);
    }
}
