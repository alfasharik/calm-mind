<?php


namespace App\Http\Controllers;

use App\Http\Requests\ThoughtAdd;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Thought as ThoughtModel;
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
    public function form() : Renderable
    {
        return view('pages.thought');
    }

    /**
     * Добавление новой мысли
     *
     * @param ThoughtAdd $obRequest
     *
     * @return Response
     */
    public function add(ThoughtAdd $obRequest) : Response
    {
        ThoughtModel::create([
            'user_id' => Auth::user()->id,
            'text' => $obRequest-> text,
            'date_created_at' => time(),
            'is_open' => true,
        ]);

        return new Response();
    }

    public function delete(int $id)
    {
        if ($id) {
            ThoughtModel::destroy($id);
        }

        return redirect()->route('account');
    }
}
