<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class Letter
 * @package App\Http\Controllers
 */
class Letter extends Controller
{
    /**
     * Страница писем.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        return view('pages.letter');
    }
}
