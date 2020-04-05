<?php


namespace App\Http\Controllers;

use App\Http\Requests\LetterAdd;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Response;
use App\Models\Letter as LetterModel;
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
    public function form() : Renderable
    {
        return view('pages.letter');
    }

    /**
     * Добавить новое письмо
     *
     * @param LetterAdd $obRequest
     *
     * @return Response
     */
    public function add(LetterAdd $obRequest) : Response
    {
        if (!$sToWhom = $obRequest->to_whom) {
            $sToWhom = 'yourself';
        }

        LetterModel::create([
           'user_id' => Auth::user()->id,

           'wrath_text' => $obRequest->wrath_text,
           'sad_text' => $obRequest->sad_text,
           'fear_text' => $obRequest->fear_text,
           'regret_text' => $obRequest->regret_text,
           'love_text' => $obRequest->love_text,

           'to_whom' => $sToWhom,

           'date_created_at' => time(),
           'is_open' => true,
        ]);

        return new Response();
    }

    public function delete(int $id)
    {
        if ($id) {
            LetterModel::destroy($id);
        }

        return redirect()->route('account');
    }
}
