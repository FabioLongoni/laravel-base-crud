<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:100',
            'description' =>'required',
            'thumb' => 'nullable|max:255',
            'price' => 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:50'
        ]);
        // $comic = new Comic(); 
        // $comic->fill($params);

        // $comic = $params['title'];
        // $comic = $params['description'];
        // $comic = $params['thumb'];
        // $comic = $params['price'];
        // $comic = $params['series'];
        // $comic = $params['sale_date'];
        // $comic = $params['type'];

        //$comic->save();
        $comic = Comic::create($params);

        return redirect()->route('comics.show',$comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit',compact('comic'));  
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
        //$comic = Comic::findOrFail($id);
        $params = $request->validate([
            'title' => 'required|max:100',
            'description' =>'required',
            'thumb' => 'nullable|max:255',
            'price' => 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:50'
        ]);

        $comic->update($params);

        return redirect()->route('comics.show',$comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}
