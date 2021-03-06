<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class Blog
 * @package App\Http\Controllers
 */
class Blog extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * Блог.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        return view('pages.blog');
    }
}
