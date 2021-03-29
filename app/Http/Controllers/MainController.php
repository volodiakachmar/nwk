<?php

namespace App\Http\Controllers;

use App\Post;
use App\Praca;
use App\Events;
use App\Indeks;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $posts = Post::all();
        $works = Praca::all();
        $events = Events::all();
        $indeks= Indeks::all();


        return view('index', compact('posts','works','events','indeks'));
    }
}
