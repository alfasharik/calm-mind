<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Letter as LetterModel;
use Illuminate\Support\Facades\Auth;

/**
 * Class Letter
 * @package App\Http\Controllers
 */
class Letter extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Страница писем.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        return view('pages.letter');
    }

    /**
     * Добавить новое письмо
     *
     * @param Request $obRequest
     *
     * @return Response
     */
    public function add(Request $obRequest) : Response
    {
        $sToWhom = 'yourself';

        if ($obRequest->input('to_whom') !== null) {
            $sToWhom = $obRequest->input('to_whom');
        }

        $obLetter = new LetterModel();

        $obLetter::create([
           'user_id'         => Auth::user()->id,

           'wrath_text'      => $obRequest->input('wrath_text'),
           'sad_text'        => $obRequest->input('sad_text'),
           'fear_text'       => $obRequest->input('fear_text'),
           'regret_text'     => $obRequest->input('regret_text'),
           'love_text'       => $obRequest->input('love_text'),

           'to_whom'         => $sToWhom,

           'date_created_at' => time(),
           'is_open'         => false,
        ]);

        return new Response();
    }
}
