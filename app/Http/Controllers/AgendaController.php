<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function read (){
        $users = DB::table('desafio')
        ->select('*')
        ->get();
        return view('home', compact('users'));

    }

    public function create(){
        $users = DB::table('desafio')->insert(['nome','telefone','email']);

    }

    public function update(){
        DB::table('desafio')->updateOrInsert(['nome'=>'albert','telefone' =>123456,'email' =>'albert@teste.com']);

    }
    public function delete  (){
        
        $deleted = DB::table('desafio')->where('id', '=', 100)->delete();
        

    }

    
}
