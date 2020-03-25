<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class About
 * @package App\Http\Controllers\
 */
class About extends Controller
{
    /**
     * Обо мне.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        return view('pages.about');
    }
}
