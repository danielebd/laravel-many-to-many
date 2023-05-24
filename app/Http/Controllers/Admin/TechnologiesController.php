<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTechnologiesRequest;
use App\Http\Requests\UpdateTechnologiesRequest;
use App\Models\Technologie;

class TechnologiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Technologie::all();

        return view('admin.technologies.index', compact('technologies'));
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
     * @param  \App\Http\Requests\StoreTechnologiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnologiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Technologies  $technologies
     * @return \Illuminate\Http\Response
     */
    public function show(Technologies $technologies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technologies  $technologies
     * @return \Illuminate\Http\Response
     */
    public function edit(Technologies $technologies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechnologiesRequest  $request
     * @param  \App\Models\Technologies  $technologies
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechnologiesRequest $request, Technologies $technologies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technologies  $technologies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technologies $technologies)
    {
        //
    }
}
