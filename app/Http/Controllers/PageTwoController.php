<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageTwoController extends Controller
{
    //
    public function index(){
        return view('/pagetwo');
    }
}
