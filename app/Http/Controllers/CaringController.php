<?php

namespace App\Http\Controllers;

use App\Models\Caring;
use App\Http\Requests\StoreCaringRequest;
use App\Http\Requests\UpdateCaringRequest;

class CaringController extends Controller
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
     * @param  \App\Http\Requests\StoreCaringRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caring  $caring
     * @return \Illuminate\Http\Response
     */
    public function show(Caring $caring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caring  $caring
     * @return \Illuminate\Http\Response
     */
    public function edit(Caring $caring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCaringRequest  $request
     * @param  \App\Models\Caring  $caring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCaringRequest $request, Caring $caring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caring  $caring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caring $caring)
    {
        //
    }
}
