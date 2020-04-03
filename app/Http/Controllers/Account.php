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
    public function index(Request $obRequest) : Renderable
    {
        $sSection = '';

        if ($obRequest->query('section')) {
            $sSection = ucfirst($obRequest->input('section'));

            $obModelName = 'App\\' . $sSection;

            $arData = (new $obModelName)
                ->where('user_id', Auth::user()->id)
                ->get();

            return view(
                'pages.lk',
                ['data' => $arData, 'section' => lcfirst($sSection)]
            );
        }

        return view('pages.lk', ['section' => $sSection]);
    }

}
