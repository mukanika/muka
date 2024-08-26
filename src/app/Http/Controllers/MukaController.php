<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MukaController extends Controller
{
    public function index($muka)
    {
        $item = [
            'content' => 'パラメータを渡す',
            'param' => $muka
        ];
        return view('index');
    }
}
