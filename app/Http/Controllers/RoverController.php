<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoverController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function move(Request $request)
    {
        $commands = strtoLower($request->input('commands'));

        $result = [
            'message' => 'Rover moved successfully.',
            'x' => 5,
            'y' => 3,
            'direction' => 'E'
        ];

        return view('index', compact('result'));
    }
}
