<?php

namespace App\Http\Controllers;

use App\Praca;
use Illuminate\Http\Request;

class PracaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Praca::all();

        return view('praca.index', compact('works'));
    }

    public function list(){
        $works = Praca::all();

        return view('praca.praca', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('praca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);

        $workPhoto =  $request->work_link->store('public');

        $work = new Praca([
            'miasto' => $request->get('miasto'),
            'stawka' => $request->get('stawka'),
            'stanowisko' => $request->get('stanowisko'),
            'nazwa_agencji_firmy' => $request->get('nazwa_agencji_firmy'),
            'typ_umowy' => $request->get('typ_umowy'),
            'mieszkanie' => $request->get('mieszkanie'),
            'o_pracy' => $request->get('o_pracy'),
            'telefon' => $request->get('telefon')
        ]);

        $work->work_link=$workPhoto;

        $work->save();

        return redirect('/praca')->with('success', 'Пост успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Praca  $praca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = Praca::find($id);

        return view('praca.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Praca  $praca
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Praca::find($id);

        return view('praca.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Praca  $praca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

        ]);

        $work = Praca::find($id);
        $work->miasto = $request->get('miasto');
        $work->stawka = $request->get('stawka');
        $work->stanowisko = $request->get('stanowisko');
        $work->nazwa_agencji_firmy = $request->get('nazwa_agencji_firmy');
        $work->typ_umowy = $request->get('typ_umowy');
        $work->mieszkanie = $request->get('mieszkanie');
        $work->o_pracy = $request->get('o_pracy');
        $work->telefon = $request->get('telefon');



        $work->save();

        return redirect('/praca')->with('success', 'Пост успешно отредактирован!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Praca  $praca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Praca::find($id);

        $work->delete();

        return redirect('/praca')->with('success', 'Post deleted');

    }

}
