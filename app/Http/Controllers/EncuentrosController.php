<?php

namespace App\Http\Controllers;

use App\Models\encuentros;
use App\Http\Requests\StoreencuentrosRequest;
use App\Http\Requests\UpdateencuentrosRequest;

class EncuentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreencuentrosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreencuentrosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function show(encuentros $encuentros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function edit(encuentros $encuentros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateencuentrosRequest  $request
     * @param  \App\Models\encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateencuentrosRequest $request, encuentros $encuentros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function destroy(encuentros $encuentros)
    {
        //
    }
}
