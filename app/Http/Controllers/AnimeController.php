<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;
use App\Character;
use App\Creator;
use App\Http\Requests\AnimeRequest;
use App\Http\Requests\CharacterRequest;
use App\Http\Requests\CreatorRequest;

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

    public function add(AnimeRequest $request){
        Anime::create($request->all());
        return redirect(route('anime.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimeRequest $request)
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
        $characters = Character::where('anime_id', $anime->id)->get();
        $creators = Creator::where('anime_id', $anime->id)->get();

        return view('crud.show', compact('anime', 'characters', 'creators'));
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
    public function update(AnimeRequest $request, Anime $anime)
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

    /*
    * Funtions for making char and cre for each anime
    */

    public function addch(Anime $anime){
        return view('crud.addch', compact('anime'));
    }

    public function addcr(Anime $anime){
        return view('crud.addcr', compact('anime'));
    }

    public function createch(Anime $anime, CharacterRequest $request){
        Character::create($request->all());
        return redirect('/acrud/'.$anime->id);
    }

    public function createcr(Anime $anime, CreatorRequest $request){
        Creator::create($request->all());
        return redirect('/acrud/'.$anime->id);
    }

    public function editch(Anime $anime, Character $character){
        return view('crud.editch', compact('anime', 'character'));
    }

    public function editcr(Anime $anime, Creator $creator){
        return view('crud.editcr', compact('anime', 'creator'));
    }

    public function updatech(Anime $anime, Character $character, CharacterRequest $request){
        $character->update($request->all());
        return redirect('/acrud/'.$anime->id);
    }

    public function updatecr(Anime $anime, Creator $creator, CreatorRequest $request){
        $creator->update($request->all());
        return redirect('/acrud/'.$anime->id);
    }

    public function destroych(Anime $anime, Character $character){
        $character->delete();
        return redirect('/acrud/'.$anime->id);
    }

    public function destroycr(Anime $anime, Creator $creator){
        $creator->delete();
        return redirect('/acrud/'.$anime->id);
    }
}
