@extends("main")

@section("aside")


@endsection

@section("content")

        @foreach($boardGameCategory->board_games as $boardgame)
            <h2>{{$boardgame->name}}</h2>
            <p>{{$boardgame->description}}</p>
            <p>Category: <u>{{$boardGameCategory->name}}</u></p>
            <br/>
            <p>Publisher: {{$boardgame->publisher}}</p>
            <p>Game Time:{{$boardgame->game_time}}</p>
            <b>Players: {{$boardgame->min_player}}-{{$boardgame->max_player}}</b>
            <p>Age: +{{$boardgame->min_age}}</p>
            <hr/>
        @endforeach
        <br/>

@endsection

{{-- @todo

 -EGY Társasjáték
 -Kezdőlap top10 block és az újdonságok (aside)
 -Listaoldalon is top10 és újdonságok (aside)
 -Boardsgame oldalon információk a társasjátékról (aside)

 --}}
