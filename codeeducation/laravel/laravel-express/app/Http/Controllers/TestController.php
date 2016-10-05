<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index($nome){
        //O Laravel compreende que test ponto index
        //é o mesmo que o arquivo index.blade.php na pasta test
        return view('test.index', ['nome'=>$nome]);
    }


    public function notas()
    {   
        $notas = [
            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3',
            3 => 'Anotação 4',            
            4 => 'Anotação 5',
        ];

        //a função compact() ela utiliza o nome para criar um array a partir de
        //$notas e utiliza o nome notas como chave
        return view('test.notas', compact('notas'));
    }
}
