<?php

namespace App\Http\Controllers;

use App\Models\Consultants;
use App\Http\Requests\StoreConsultantsRequest;
use App\Http\Requests\UpdateConsultantsRequest;

class ConsultantsController extends Controller
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
     * @param  \App\Http\Requests\StoreConsultantsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultantsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultants  $consultants
     * @return \Illuminate\Http\Response
     */
    public function show(Consultants $consultants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultants  $consultants
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultants $consultants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConsultantsRequest  $request
     * @param  \App\Models\Consultants  $consultants
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultantsRequest $request, Consultants $consultants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultants  $consultants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultants $consultants)
    {
        //
    }
}
