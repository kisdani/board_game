@extends("main")

@section("aside")
    
@endsection

@section("content")

        <div class="container-fluid">
            <div class="row" style="justify-content: center; padding:20px;">
                @foreach ($boardGameCategory->board_games as $boardgame)

                    <div class="card col-sm-3" style="width: 18rem; margin: 10px;">
                        <img src="{{$boardgame->image}}" class="card-img-top" alt="{{$boardgame->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$boardgame->name}} </h5>
                            <p class="card-text">{{$boardgame->description}} </p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <small>
                                        @foreach($boardgame->categories as $category)
                                            <b>Category:</b> {{$category->name}}
                                        @endforeach
                                    </small>
                                </li>
                                <li class="list-group-item">
                                    <small>
                                        <b>Publisher:</b> {{$boardgame->publisher}}
                                    </small>
                                </li>
                                <li class="list-group-item">
                                    <small>
                                        <b>Player num:</b> {{$boardgame->min_player}} - {{$boardgame->max_player}}
                                    </small>
                                </li>
                            </ul><br>
                            <a href="{{ route('boardgame',['name'=>$boardgame->seo_name]) }}" style="width:100%" class="btn btn-primary">View</a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

@endsection

{{-- @todo

 -EGY T??rsasj??t??k
 -Kezd??lap top10 block ??s az ??jdons??gok (aside)
 -Listaoldalon is top10 ??s ??jdons??gok (aside)
 -Boardsgame oldalon inform??ci??k a t??rsasj??t??kr??l (aside)

 --}}
