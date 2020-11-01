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
        return view ('emoji.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $request->validate([
            'slug'=>'required',
            'character'=>'required',
            'unicodeName'=>'required',
            'codePoint'=>'required',
            'group'=>'required',
            'subGroup'=>'required'
        ]);

        $emoji = new Emoji;
        $emoji = fill($data);
        $emoji->save();

        return redirect()->route('emoji.show', $emoji);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function show(Emoji $emoji)
    {
        return view ('emoji.show', compact('emoji'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function edit(Emoji $emoji)
    {
      
        return view('emoji.edit', compact('emoji'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
            'slug'=>'required',
            'character'=>'required',
            'unicodeName'=>'required',
            'codePoint'=>'required',
            'group'=>'required',
            'subGroup'=>'required'
        ]);

        $emoji = Emoji::find($id);
        
        $emoji->update($data);

        return redirect()->route('emoji.show', $emoji);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emoji $emoji)
    {
        $emoji = Emoji::find($id);
        $emoji->delete();
        return redirect('/emoji')->withSuccess(['Emoji deleted successfully!!']);
    }
}
