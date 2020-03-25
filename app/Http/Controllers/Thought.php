<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

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
}
