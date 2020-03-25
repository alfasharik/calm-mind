<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class Feed
 * @package App\Http\Controllers\Auth
 */
class Feed extends Controller
{
    /**
     * Лента.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        return view('pages.feed');
    }
}
