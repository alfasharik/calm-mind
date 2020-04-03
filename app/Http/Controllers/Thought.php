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
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        if ($obRequest->input('text')) {
            $sText = $obRequest->input('text');

            $obThought = new ThoughtModel();

            $obThought::create([
                'user_id' => Auth::user()->id,
                'text' => $sText,
                'date_created_at' => time(),
                'is_open' => false,
            ]);

            return new Response();
        }
    }

    public function delete(int $id)
    {
        if ($id) {
            ThoughtModel::destroy($id);
        }

        return redirect()->route('account');
    }
}
