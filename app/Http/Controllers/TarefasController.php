<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TarefasController extends Controller
{
    public function list(){
        $list = DB::table('tarefas')->get();

        return view('tarefas.list', [
            'list'=> $list
        ]);
    }

    public function add(){
        return view('tarefas.add');
    }

    public function addAction(){

    }

    public function edit(){

    }

    public function editAction(){

    }

    public function del(){

    }

    public function done(){

    }
}
