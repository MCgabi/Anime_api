<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::orderBy('id', 'desc')->paginate(10);
        return view('crud.index', compact('animes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    public function add(Request $request){
        Anime::create($request->all());
        return redirect(route('anime.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        return view('crud.show', compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {
        return view('crud.edit', compact('anime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $anime)
    {
        $anime->update($request->all());
        return redirect('/acrud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        $anime->delete();
        return redirect('/acrud');
    }
}
