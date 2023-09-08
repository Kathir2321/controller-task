<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Blade;

class usercontroller extends Controller
{
    public function index(){

        return view('index');
        }

   public function insert(Request $request){
    $food= $request->input('name');
    DB::insert('insert into foodmenu(name) value(?)',[$food]);
    return "food is added successfully <a href='/'>click me</a>";
   }
}
