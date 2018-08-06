@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Welcom to the CURD of anime_api: </h1>  
   @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach
        <div class="mb-3"></div>
    @endif
    <form action="{{ route('anime.updatech', ['anime' => $anime, 'character' => $character]) }}" method="POST">
    <input type="hidden" value="PUT" name="_method">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="{{ $anime->id }}" name="anime_id">

    <div class="form-group">
        <input type="text" value="{{ $character->first_name }}" class="form-control" name="first_name">
    </div>

    <div class="form-group">
        <input type="text" value="{{ $character->last_name }}" class="form-control" name="last_name">
    </div>

     <div class="form-group">
        <textarea class="form-control" name="bio" cols="30" rows="10">{{ $character->bio }}" </textarea>
    </div>

     <div class="form-group">
        <input type="number" value="{{ $character->age }}"  class="form-control" name="age">
    </div>

     <div class="form-group">
        <input type="text" value="{{ $character->gender }}"  class="form-control" name="gender">
    </div>

    <input type="submit" class="btn btn-success " value="Update character">
   </form>
</div>
@endsection