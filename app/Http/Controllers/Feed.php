<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Support\Renderable;
use App\Thought as ThoughtModel;
use App\User as UserModel;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feed
 * @package App\Http\Controllers\Auth
 */
class Feed extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Лента.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        $arThoughts = ThoughtModel::where('is_open', 0)->get();

        return view('pages.feed', ['thoughts' => $arThoughts]);
    }
}
