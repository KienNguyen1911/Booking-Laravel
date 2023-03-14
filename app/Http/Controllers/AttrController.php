<?php

namespace App\Http\Controllers;

use App\Models\Attr;
use App\Http\Requests\StoreAttrRequest;
use App\Http\Requests\UpdateAttrRequest;

class AttrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.pages.attributes.index', []);
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
     * @param  \App\Http\Requests\StoreAttrRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttrRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attr  $attr
     * @return \Illuminate\Http\Response
     */
    public function show(Attr $attr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attr  $attr
     * @return \Illuminate\Http\Response
     */
    public function edit(Attr $attr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttrRequest  $request
     * @param  \App\Models\Attr  $attr
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttrRequest $request, Attr $attr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attr  $attr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attr $attr)
    {
        //
    }
}
