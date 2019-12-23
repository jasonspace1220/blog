<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;


class TestController extends Controller
{
    public function index()
    {
        $test = Test::all();
        return view('test.index');
    }
}
