<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anime;
use App\Http\Resources\Anime as AnimeResource;

use App\Character;
use App\Http\Resources\Character as CharacterResource;

use App\Creator;
use App\Http\Resources\Creator as CreatorResource;

class AnimeAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anime = Anime::all();
        return AnimeResource::collection($anime);
    }

    public function animenew(){
        $anime = Anime::orderBy('created_at', 'desc')->limit(5)->get();
        return AnimeResource::collection($anime);
    }

    /**
     * Display the specified resource.
     *
     * @param  Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        $anime = Anime::where('id', $anime->id)->get();
        return AnimeResource::collection($anime);
    }

    /*
    * This are requests for characters 
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexch(Anime $anime)
    {
        $characters = Character::where('anime_id', $anime->id)->get();
        return CharacterResource::collection($characters);
    }

     /**
     * Display the specified resource.
     *
     * @param  Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function showch(Anime $anime, Character $character)
    {
        $characters = Character::where('anime_id', $anime->id)->where('id', $character->id)->get();
        return CharacterResource::collection($characters);
    }

    /*
    * This are requests for creators 
    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexcr(Anime $anime)
    {
        $creators = Creator::where('anime_id', $anime->id)->get();
        return CreatorResource::collection($creators);
    }

     /**
     * Display the specified resource.
     *
     * @param  Anime $anime
     * @return \Illuminate\Http\Response
     */
    public function showcr(Anime $anime, Creator $creator)
    {
        $creators = Creator::where('anime_id', $anime->id)->where('id', $creator->id)->get();
        return CreatorResource::collection($creators);
    }

   

}
