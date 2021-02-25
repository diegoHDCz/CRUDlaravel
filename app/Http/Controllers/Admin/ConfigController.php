<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request){

        $nome = 'Diego';
        $idade = 69;

        $data = [
            'nome'=>$nome,
            'idade'=>$idade
        ];

        return view('admin.config', $data);
    }

    public function info() {
        echo 'FUNCIONA PORRA';
    }
}
