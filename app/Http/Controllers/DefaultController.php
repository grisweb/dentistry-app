<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DefaultController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'slides' => ['slide1', 'slide2']
        ]);
    }
}
