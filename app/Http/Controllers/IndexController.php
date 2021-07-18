<?php

namespace App\Http\Controllers;

use App\Models\Scope;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
            $articles = Scope::all();
            dd($articles);
             return view('s', compact('articles'));

    }
}
