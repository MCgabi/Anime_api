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
    <form action="{{ route('anime.createcr', $anime) }}" method="POST">
    <input type="hidden" value="POST" name="_method">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="{{ $anime->id }}" name="anime_id">

    <div class="form-group">
        <input type="text" placeholder="First name" class="form-control" name="first_name">
    </div>

    <div class="form-group">
        <input type="text" placeholder="Last name" class="form-control" name="last_name">
    </div>

    <div class="form-group">
        <input type="text" placeholder="Role" class="form-control" name="role">
    </div>

    <input type="submit" class="btn btn-success " value="Add new creator">
   </form>
</div>
@endsection