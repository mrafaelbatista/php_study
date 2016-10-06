<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class MaterialController extends Controller {

    //Função index
    public function index() {

        $textos = [
            0 => ['TA', 'Texto'],
            1 => ['TB', 'Texto'],
            2 => ['TC', 'Texto'],
            3 => ['TD', 'Texto'],
            4 => ['TE', 'Texto']
        ];

        return view('material.index', compact('textos'));
    }

}
