<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardGameController extends Controller
{

    public function list()
    {
        return view('pages/list');
    }

    public function boardGame($name)
    {
        return view('pages/boardgame',["name"=>$name]);
    }
}
