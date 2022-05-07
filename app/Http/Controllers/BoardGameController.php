<?php

namespace App\Http\Controllers;

use App\Models\BoardGame;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BoardGameController extends Controller
{
    public $locale;

    public function __construct()
    {
        $this->locale=App::getLocale();
    }

    public function list(Request $request)
    {
        $boardgames = BoardGame::take(6)->get();
        $categories = Category::all();

        return view('pages/list', [
            "boardgames" => $boardgames,
            "categories" => $categories
        ]);
    }

    public function boardGame($name)
    {
        $boardGame = BoardGame::with('categories')->whereTranslation('seo_name', $name, $this->locale)->firstOrFail();

        return view('pages/boardgame',["boardGame"=>$boardGame]);
    }

    public function boardGameCategory($category)
    {
        $boardGameCategory = Category::with('board_games')->whereTranslation('seo_name', $category, $this->locale)->firstOrFail();

        return view('pages/boardgamecategory',["boardGameCategory"=>$boardGameCategory]);
    }

    public function search(Request $request){
        $search = $request->get("search");
        $boardgames = BoardGame::with('categories','sales')->whereTranslationLike('name', '%'.$search.'%', $this->locale)->paginate(1);

        return view('pages/search',["boardGames"=>$boardgames]);
    }
}
