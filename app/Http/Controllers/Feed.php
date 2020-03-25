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
    /**
     * Лента.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        $arThoughts = UserModel::find(1)->thoughts()->get();

        foreach ($arThoughts as $arUser) {
            var_dump($arUser->text);
        }
        return view('pages.feed', ['thoughts' => $arThoughts]);
    }
}
