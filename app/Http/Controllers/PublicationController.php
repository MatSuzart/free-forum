<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index(){
        return view('index');
    }

    public function upload(Request $request){
        
    }

    public function delete(){

    }
}
