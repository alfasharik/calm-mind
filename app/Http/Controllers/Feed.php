<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Thought as ThoughtModel;
use App\Letter as LetterModel;
use App\User as UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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
     * @param Request $obRequest
     * @return Renderable
     */
    public function index(Request $obRequest) : Renderable
    {
        $sSection = '';

        if ($obRequest->query('section')) {
            $sSection = ucfirst($obRequest->query('section'));

            $modelName = $sSection . 'Model';

            $arData = $modelName::where('is_open', 0)->get();

            return view('pages.feed', ['data' => $arData, 'section' => $sSection]);
        }

        return view('pages.feed', ['section' => $sSection]);
    }
}
