<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact', ['title'=> 'contact', 'nama'=> 'najib','kelas'=> '11 pplg 2', 'linkedin'=>'najib abdullah', 'GitHub' => 'najibabdllh']);

    }
}
