@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Welcom to the CURD of anime_api: </h1>  
   <h3>{{ $anime->title }}:</h3> 
    Basic informations: <br>
    <ul>
        <li>Episodes: {{ $anime->episodes }}</li> 
        <li>Genres: {{ $anime->genres }} </li>
        <li>Description: {{ $anime->description }}</li> 
    </ul>
</div>
@endsection
