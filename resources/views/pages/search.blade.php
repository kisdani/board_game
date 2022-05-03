@extends("main")

@section("aside")
    Lista aside
@endsection

@section("content")

        @foreach($boardGames as $boardgame)
            <h2>{{$boardgame->name}}</h2>
            <p>{{$boardgame->description}}</p>
            <br/>
            <p>Publisher: {{$boardgame->publisher}}</p>
            <p>Game Time:{{$boardgame->game_time}}</p>
            <b>Players: {{$boardgame->min_player}}-{{$boardgame->max_player}}</b>
            <p>Age: +{{$boardgame->min_age}}</p>
            <hr/>
        @endforeach
        <br/>

        {{ $boardGames->links('partials/pagination') }}

@endsection


