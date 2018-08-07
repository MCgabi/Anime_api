@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <scroll></scroll>
    <div class="col-sm-9 scrollspy-example" data-spy="scroll" data-target="#spy">
  <div id="scroll1">
    <h2>About api</h2>
    <p>
    The api is in development, it is open source and you can check the code on <a href="https://github.com/MCgabi/Anime_api">GitHub</a>. It is developmenting by Gabriel Gałęza. Current version of project is {{ env('APP_VERSION') }}  
    
    </p>
  </div>
  <div id="scroll2">
    <h2>Animes</h2>
    <p>
    Animes in this api will return a few basic information about each anime like e.g. title, description, number of episodes, or genres. According to the endpoints api can return all anime form database, only one object etc.
    <br>
    <br>
    <h3>Endpoints: </h3>
    <br>
    First endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/anime 
    </code></pre>
    It will return list of all anime form api, it can take some time to fetch this JSON according to the speed of the internet and the size of the database.
    <br>
    <br>
    <br>
    Second endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/anime/:id 
    </code></pre>
    It will return anime with id that you entered as param, it is faster than previous endpoint, but it will return only one object and you must know id of anime.
    <br>
    <br>
    <br>
    Third endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/animenew
    </code></pre>
    It will return list of 5 animes, it is slower than previous endpoint, but it  return five object ordered by date of created (order method: desc).
    </p>
  </div>
  <div id="scroll3">
    <h2>Characters</h2>
    <p>
    Characters in this api will return a few basic information about each Characters, but from a given anime. It means that you must first set anime id that you wonna to return list of characters.
    <br>
    <br>
    <h3>Endpoints: </h3>
    <br>
    First endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/anime/:id/characters 
    </code></pre>
    It will return list of all characters form api according to selected anime, it can take some time to fetch this JSON according to the speed of the internet and the size of the database.
    <br>
    <br>
    <br>
    Second endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/anime/:id/character/:id
    </code></pre>
    It will return character with id that you entered as param according to selected anime, it is faster than previous endpoint, but it will return only one object and you must know id of anime, and id of character.
    <br>
    <br>
    <br>
    Third endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/characters/
    </code></pre>
    It will return list of all characters, sometimes one character can show two times, it can take some time to fetch this JSON according to the speed of the internet and the size of the database.
    <br>
    <br>
    <br>
    Fourth endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/character/:id
    </code></pre>
    It will return character with id that you entered as param, it is faster than previous endpoint, but it going to return only one object and you must know id of character.
    </p>
  </div>
  <div id="scroll4">
    <h2>Creators</h2>
    <p>
    Creators in this api will return a few basic information about each creators, but from a given anime. It means that you must first set anime id that you wonna to return list of creators.
    <br>
    <br>
    <h3>Endpoints: </h3>
    <br>
    First endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/anime:id/creators/
    </code></pre>
    It will return list of all creators form api according to selected anime, it can take some time to fetch this JSON according to the speed of the internet and the size of the database.
    <br>
    <br>
    <br>
    Second endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/anime:id/creator/:id
    </code></pre>
    It will return creator with id that you entered as param according to selected anime, it is faster than previous endpoint, but it going to return only one object and you must know id of anime, and id of creator.
    <br>
    <br>
    <br>
    Third endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/creators/
    </code></pre>
    It will return list of all creators, sometimes one creator can show two times, it can take some time to fetch this JSON according to the speed of the internet and the size of the database.
    <br>
    <br>
    <br>
    Fourth endpoint is: 
    <pre class="bg-dark text-white rounded"><code>
    <span style="color: green">GET: </span>http:/anime_api/api/creator/:id
    </code></pre>
    It will return creator with id that you entered as param, it is faster than previous endpoint, but it going to return only one object and you must know id of creator.
    </p>
  </div>
</div>
</div>
</div>
@endsection