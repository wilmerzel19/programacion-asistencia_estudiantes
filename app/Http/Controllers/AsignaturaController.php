<?php

namespace App\Http\Controllers;

use App\Models\asignatura;
use App\Http\Requests\StoreasignaturaRequest;
use App\Http\Requests\UpdateasignaturaRequest;

class AsignaturaController extends Controller
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
     * @param  \App\Http\Requests\StoreasignaturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreasignaturaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(asignatura $asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit(asignatura $asignatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateasignaturaRequest  $request
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateasignaturaRequest $request, asignatura $asignatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(asignatura $asignatura)
    {
        //
    }
}
