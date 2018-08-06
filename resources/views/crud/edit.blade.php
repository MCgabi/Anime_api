@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Welcom to the CURD of anime_api: </h1>  
   <form action="{{ route('anime.update', $anime) }}" method="POST">
    <input type="hidden" value="PUT" name="_method">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">

    <div class="form-group">
        <input type="text" value="{{ $anime->title }}" class="form-control" name="title">
    </div>

     <div class="form-group">
        <textarea class="form-control" name="description" cols="30" rows="10">{{ $anime->description }}</textarea>
    </div>

     <div class="form-group">
        <input type="number" value="{{ $anime->episodes }}" class="form-control" name="episodes">
    </div>

     <div class="form-group">
        <input type="text" value="{{ $anime->genres }}" class="form-control" name="genres">
    </div>

    <input type="submit" class="btn btn-success " value="Add new anime">
   </form>
</div>
@endsection
