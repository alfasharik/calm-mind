<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Http\Requests\LetterAdd;
use App\Models\Letter as LetterModel;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Letter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('pages.letter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LetterAdd $obRequest
     *
     * @return Response
     */
    public function store(LetterAdd $obRequest): Response
    {
        if (!$sToWhom = $obRequest->to_whom) {
            $sToWhom = 'yourself';
        }

        LetterModel::create([
            'user_id' => Auth::user()->id,

            'wrath_text' => $obRequest->wrath_text,
            'sad_text' => $obRequest->sad_text,
            'fear_text' => $obRequest->fear_text,
            'regret_text' => $obRequest->regret_text,
            'love_text' => $obRequest->love_text,

            'to_whom' => $sToWhom,

            'date_created_at' => time(),
            'is_open' => true,
        ]);

        return new Response();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
