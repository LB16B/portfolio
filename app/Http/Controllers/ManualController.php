<?php

namespace App\Http\Controllers;

use App\Models\manual;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoremanualRequest;
use App\Http\Requests\UpdatemanualRequest;

class ManualController extends Controller
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
     * @param  \App\Http\Requests\StoremanualRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremanualRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function show(manual $manual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function edit(manual $manual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemanualRequest  $request
     * @param  \App\Models\manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemanualRequest $request, manual $manual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\manual  $manual
     * @return \Illuminate\Http\Response
     */
    public function destroy(manual $manual)
    {
        //
    }
}
