<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class Account
 * @package App\Http\Controllers
 */
class Account extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Страница личного кабинета.
     *
     * @param string $sSection
     *
     * @return Renderable
     */
    public function index(string $sSection = '') : Renderable
    {
        $sModelNameSpace = "App\\Models\\";

        if ($sSection) {
            $obModelName = $sModelNameSpace . ucfirst($sSection);

            $arData = (new $obModelName)->getByUserId(Auth::user()->id);

            return view(
                'pages.account',
                ['data' => $arData, 'section' => lcfirst($sSection)]
            );
        }

        return view('pages.account', ['section' => $sSection]);
    }

}
