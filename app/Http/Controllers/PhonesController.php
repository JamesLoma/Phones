<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function index() {
        $phones = [
            ['type'=> 'iPhones', 'base'=> 'X, Xs max, 12 Promax'], 
            ['type'=> 'Samsung', 'base'=> 'S9, Note 10, S21'],
            ['type'=> 'Google pixel', 'base'=> '3a, 4, 4a']
        ];
        
       return view('phones',['phones' => $phones]);

    } 

    public function show($id){

        return view('details', ['id' => $id]);

    }
}
