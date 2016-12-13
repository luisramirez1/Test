<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntas;

class TestController extends Controller
{
    public function test()
    {
		$preguntas = Preguntas::all();
        return view('/test', compact('preguntas'));
    }
}
