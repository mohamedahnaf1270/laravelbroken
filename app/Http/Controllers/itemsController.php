<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items =\App\items::paginate();
        return view('items.index')->with('itemlist',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newitems = new \App\items();
        $newitems->name =$request->name;
        $newitems->brand =$request->brand;
        $newitems->category =$request->category;
        $newitems->expirey_date =$request->expirey_date;
        $newitems->price =$request->price;
        $newitems->save();

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = \App\items::find($id);
        return view('items.edit')->with('items',$items);
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
        $items = \App\items::find($id);
        $items->name =$request->name;
        $items->brand =$request->brand;
        $items->category =$request->category;
        $items->expirey_date =$request->expirey_date;
        $items->price =$request->price;
        $items->save();

        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\items::destroy($id);
        return redirect()->route('items.index');
    }
}
