<?php

namespace App\Http\Controllers\Resources;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThoughtAdd;
use App\Models\Thought as ThoughtModel;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Thought extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ThoughtModel[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return ThoughtModel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('pages.thought');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ThoughtAdd $obRequest
     *
     * @return Response
     */
    public function store(ThoughtAdd $obRequest): Response
    {
        ThoughtModel::create([
            'user_id' => Auth::user()->id,
            'text' => $obRequest-> text,
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
        return ThoughtModel::find($id);
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
