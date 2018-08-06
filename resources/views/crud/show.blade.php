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

    <div class="float-left">
        <h1>Characters: </h1>

        <form action="{{ route('anime.addch', $anime) }}">
        <input type="submit" class="btn btn-success btn-lg" value="Add new Character">
        </form>

       

        @foreach($characters as $character)
        <div class="mt-3"></div>
            <div class="card border border-primary rounded" style="width: 18rem;">
                <h3 class="h3">{{$character->first_name}} {{$character->last_name}}</h3> 
                <div class="card-body">
                    <ul>
                        <li>Age: {{ $character->age }}</li>
                        <li>Gender: {{ $character->gender }}</li> 
                    </ul>
                    <p class="card-text">Bio: 
                    @if(strlen($character->bio) >= 50)
                        {{ substr($character->bio, 0, 50) }}...
                    @else 
                        {{ $character->bio }}
                    @endif
                    </p>

                    <a href="{{ route('anime.editch',['anime' => $anime, 'character' => $character]) }}" class="btn btn-info">Edit</a>
                        <form action="{{route('anime.destroych', ['anime' => $anime, 'character' => $character])}}" method="post">
                        <input type="hidden" value="DELETE" name="_method">
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="float-right">
        <h1>Creators: </h1>

        <form action="{{ route('anime.addcr', $anime) }}" >
        <input type="submit" class="btn btn-success btn-lg" value="Add new Creator">
        </form>

         

        @foreach($creators as $creator)
        <div class="mt-3"></div>
            <div class="card border border-primary rounded" style="width: 18rem;">
                <h3 class="h3">{{$creator->first_name}} {{$creator->last_name}}</h3> 
                <div class="card-body">
                    <p class="card-text">Role: {{ $creator->role }}</p>

                    <a href="{{route('anime.editcr', ['anime' => $anime, 'creator' => $creator])}}" class="btn btn-info">Edit</a>
                    <form action="{{ route('anime.destroycr', ['anime' => $anime, 'creator' => $creator]) }}" method="post">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <input type="hidden" value="DELETE" name="_method">
                    <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
                
            </div>
        @endforeach
    </div>
</div>
@endsection
