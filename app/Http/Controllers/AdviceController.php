<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviceController extends Controller
{
    public function documents(){
        return view('advice.documents_list');
    }
}
