<?php

namespace App\Http\Controllers;

use App\Indeks;
use Illuminate\Http\Request;

class IndeksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indeks = Indeks::all();

        return view('indeks.index', compact('indeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indeks.create');
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
            'header_category'=> 'required|max:10000',
            'header_reklamacja'=> 'required|max:10000',
            'header_reklamacja_link'=> 'required|max:10000',
            'header_block_1'=> 'required|max:10000',
            'header_block_2'=> 'required|max:10000',
            'header_block_3'=> 'required|max:10000',
            'header_block_4'=> 'required|max:10000',
            'text_under_image_reklamacja'=> 'required|max:10000',
            'text_under_image_reklamacja_link'=> 'required|max:10000',
            'sidebar_image_reklamacja_1_link'=> 'required|max:10000',
            'sidebar_image_reklamacja_1_text'=> 'required|max:10000',
            'sidebar_image_reklamacja_2_link'=> 'required|max:10000',
            'sidebar_image_reklamacja_2_text'=> 'required|max:10000',
            'sidebar_image_reklamacja_1_percent'=> 'required|max:10000',
            'sidebar_image_reklamacja_2_percent'=> 'required|max:10000',
        ]);


        $image_reklamacja = $request->image_reklamacja->store('public');
        $sidebar_image_reklamacja_1 = $request->sidebar_image_reklamacja_1->store('public');
        $sidebar_image_reklamacja_2 = $request->sidebar_image_reklamacja_2->store('public');



        $indek = new Indeks([
            'header_category' => $request->get('header_category'),
            'header_reklamacja' => $request->get('header_reklamacja'),
            'header_reklamacja_link' => $request->get('header_reklamacja_link'),
            'header_block_1' => $request->get('header_block_1'),
            'header_block_2' => $request->get('header_block_2'),
            'header_block_3' => $request->get('header_block_3'),
            'header_block_4' => $request->get('header_block_4'),
            'text_under_image_reklamacja' => $request->get('text_under_image_reklamacja'),
            'text_under_image_reklamacja_link' => $request->get('text_under_image_reklamacja_link'),
            'sidebar_image_reklamacja_1_link' => $request->get('sidebar_image_reklamacja_1_link'),
            'sidebar_image_reklamacja_1_text' => $request->get('sidebar_image_reklamacja_1_text'),
            'sidebar_image_reklamacja_2_link' => $request->get('sidebar_image_reklamacja_2_link'),
            'sidebar_image_reklamacja_2_text' => $request->get('sidebar_image_reklamacja_2_text'),
            'sidebar_image_reklamacja_1_percent' => $request->get('sidebar_image_reklamacja_2_text'),
            'sidebar_image_reklamacja_2_percent' => $request->get('sidebar_image_reklamacja_2_text'),

        ]);

        $indek->image_reklamacja= $image_reklamacja;
        $indek->sidebar_image_reklamacja_1= $sidebar_image_reklamacja_1;
        $indek->sidebar_image_reklamacja_2= $sidebar_image_reklamacja_2;



        $indek->save();

        return redirect('/indeks')->with('success', 'Пост успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indeks  $indeks
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indek = Indeks::find($id);

        return view('indeks.show', compact('indek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indeks  $indeks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indek = Indeks::find($id);

        return view('indeks.edit', compact('indek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indeks  $indeks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

        ]);

        $indek = Indeks::find($id);
        $indek->header_category = $request->get('header_category');
        $indek->header_reklamacja = $request->get('header_reklamacja');
        $indek->header_reklamacja_link = $request->get('header_reklamacja_link');
        $indek->header_block_1 = $request->get('header_block_1');
        $indek->header_block_2 = $request->get('header_block_2');
        $indek->header_block_3 = $request->get('header_block_3');
        $indek->header_block_4 = $request->get('header_block_4');
        $indek->text_under_image_reklamacja = $request->get('text_under_image_reklamacja');
        $indek->text_under_image_reklamacja_link = $request->get('text_under_image_reklamacja_link');
        $indek->sidebar_image_reklamacja_1_link = $request->get('sidebar_image_reklamacja_1_link');
        $indek->sidebar_image_reklamacja_1_text = $request->get('sidebar_image_reklamacja_1_text');
        $indek->sidebar_image_reklamacja_2_link = $request->get('sidebar_image_reklamacja_2_link');
        $indek->sidebar_image_reklamacja_2_text = $request->get('sidebar_image_reklamacja_2_text');
        $indek->sidebar_image_reklamacja_1_percent = $request->get('sidebar_image_reklamacja_1_percent');
        $indek->sidebar_image_reklamacja_2_percent = $request->get('sidebar_image_reklamacja_2_percent');


        $indek->save();

        return redirect('/indeks')->with('success', 'Пост успешно отредактирован!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indeks  $indeks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indek = Indeks::find($id);

        $indek->delete();

        return redirect('/indeks')->with('success', 'Post deleted');

    }
}
