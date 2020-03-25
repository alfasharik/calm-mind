<?php


namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class Blank
 * @package App\Http\Controllers
 */
class Blank extends Controller
{
    /**
     * Пустая страница для логаута.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        return view('blank');
    }
}
