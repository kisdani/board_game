@extends("main")

@section("aside")
    Lista aside
@endsection

@section("content")

    @foreach ($boardgames as $boardgame)
        <p>{{$boardgame}}</p>
    @endforeach

@endsection

{{-- @todo

-Társasjátékok kilistázása

 --}}
