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

    public function delete(int $id)
    {
        if ($id) {
            ThoughtModel::destroy($id);
        }

        return redirect()->route('account');
    }
}
