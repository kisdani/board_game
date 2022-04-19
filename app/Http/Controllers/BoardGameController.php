<?php

namespace App\Http\Controllers;

use App\Models\BoardGame;
use Illuminate\Http\Request;

class BoardGameController extends Controller
{

    public function list()
    {
      /*  $boardgame = new BoardGame();
        $fillBoardgame = ["publisher"=>"Gémklub","game_time"=>45,"min_age"=>10,"min_player"=>1,"max_player"=>6];
        $boardgame->fill($fillBoardgame);

        $boardgame->save();
*/


        $boardgames = BoardGame::findOrFail(5);
        $boardgames -> forceDelete();

        dd($boardgames);

        return view('pages/list', ["boardgames"=>$boardgames]);
    }

    public function boardGame($name)
    {
        return view('pages/boardgame',["name"=>$name]);
    }
}
