<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\User as UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * Class Feed
 * @package App\Http\Controllers
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

            $modelName = "App\\" . $sSection;

            $arData = (new $modelName)->where('is_open', 0)->get();

            return view(
                'pages.feed',
                ['data' => $arData, 'section' => lcfirst($sSection)]
            );
        }

        return view('pages.feed', ['section' => $sSection]);
    }
}
