@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Welcom to the CURD of anime_api: </h1>  
   <form action="{{ route('anime.create') }}" >
    <input type="submit" class="btn btn-success btn-lg" value="Add new anime">
   </form>

   <table class="table table-hover mt-5">
    <thead class="thead-dark">
     <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Go to</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
     </tr>
    </thead>

    
    @foreach($animes as $anime)
     <tr>
       <th scope="col" class="table-warning">{{ $anime->id }}</th>
       <th scope="col" class="table-warning">{{ $anime->title }}</th>
       <th scope="col" class="table-info"><a href="{{ route('anime.show', $anime) }}" class="btn btn-info">Show</a></th>
       <th scope="col" class="table-success"><a href="" class="btn btn-success">Edit</a></th>
       <th scope="col" class="table-danger"><a href="" class="btn btn-danger">Delete</a></th>
     </tr>
    @endforeach
    

   </table>
   {{ $animes->links() }}
</div>
@endsection
