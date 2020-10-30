<?php

namespace App\Http\Controllers;

use App\Emoji;
use Illuminate\Http\Request;

class EmojiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emoji =  Emoji::all();
        return view('emoji.index', compact('emoji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function show(Emoji $emoji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function edit(Emoji $emoji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emoji $emoji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emoji $emoji)
    {
        //
    }
}
