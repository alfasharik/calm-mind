<?php


namespace App\Http\Controllers;

use App\Models\Letter as LetterModel;


/**
 * Class Letter
 * @package App\Http\Controllers
 */
class Letter extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function delete(int $id)
    {
        if ($id) {
            LetterModel::destroy($id);
        }

        return redirect()->route('account');
    }
}
