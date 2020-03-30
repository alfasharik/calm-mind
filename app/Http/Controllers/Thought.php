<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Thought as ThoughtModel;
use Illuminate\Support\Facades\Auth;

/**
 * Class Thought
 * @package App\Http\Controllers
 */
class Thought extends Controller
{
    /**
     * Страница мыслей.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        return view('pages.thought');
    }

    /**
     * Добавление новой мысли
     *
     * @param Request $obRequest
     *
     * @return Response
     */
    public function add(Request $obRequest) : Response
    {
        $obThought = new ThoughtModel();

        $obThought::create([
            'user_id'         => Auth::user()->id,
            'text'            => $obRequest->input('text'),
            'date_created_at' => time(),
            'is_open'         => false,
        ]);

        return new Response();
    }
}
