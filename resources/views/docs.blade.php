@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <scroll></scroll>
    <div class="col-sm-9 scrollspy-example" data-spy="scroll" data-target="#spy">
  <div id="scroll1">
    <h2>About api</h2>
    <p>

    
    </p>
  </div>
  <div id="scroll2">
    <h2>Anime</h2>
    <p>

    <!---<pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>https:/anime_api/api/anime 
    </code></pre>
    It will return list of all anime form this api-->

    </p>
  </div>
  <div id="scroll3">
    <h2>Characters</h2>
    <p>

    </p>
  </div>
  <div id="scroll4">
    <h2>Creators</h2>
    <p>

    </p>
  </div>
</div>
</div>
</div>
@endsection