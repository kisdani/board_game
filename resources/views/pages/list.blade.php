@extends("main")

@section("aside")
    Lista aside
@endsection

@section("content")

    <ul>
    @foreach($categories as $category)
            <li><a href="{{ route("category", ['category' => $category->seo_name]) }}">{{$category->name}}</a></li>
    @endforeach
    </ul>

    @foreach ($boardgames as $boardgame)
        <p> ({{$boardgame->id}}) </p>
        <h2><a href="{{ route('boardgame',['name'=>$boardgame->seo_name]) }}"> {{$boardgame->name}} </a></h2>
        <p> {{$boardgame->description}} </p>
        <p>Publisher: {{$boardgame->publisher}}</p>

        @foreach($boardgame->categories as $category)
            <p><b>Category: {{$category->name}} <br/>{{$category->description}}</b></p>
        @endforeach

        <p>Game Time: {{$boardgame->game_time}} min</p>
        <p>Minimum age: {{$boardgame->min_age}}</p>
        <p>PLayers: {{$boardgame->min_player}} - {{$boardgame->max_player}}</p>
        <hr/>
        <br/>

        <p>{{$boardgame}}</p>

    @endforeach



@endsection

{{-- @todo

-Társasjátékok kilistázása

 --}}
