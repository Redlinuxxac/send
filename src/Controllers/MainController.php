<?php

namespace Reddatasrd\Send\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(Request $request)
    {
        dd($request);
        
        //return "Hola mundo";
        return view('send::index.index');
    }
}