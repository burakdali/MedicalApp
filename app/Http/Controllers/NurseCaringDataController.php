<?php

namespace App\Http\Controllers;

use App\Models\NurseCaringData;
use App\Http\Requests\StoreNurseCaringDataRequest;
use App\Http\Requests\UpdateNurseCaringDataRequest;

class NurseCaringDataController extends Controller
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
     * @param  \App\Http\Requests\StoreNurseCaringDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNurseCaringDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NurseCaringData  $nurseCaringData
     * @return \Illuminate\Http\Response
     */
    public function show(NurseCaringData $nurseCaringData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NurseCaringData  $nurseCaringData
     * @return \Illuminate\Http\Response
     */
    public function edit(NurseCaringData $nurseCaringData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNurseCaringDataRequest  $request
     * @param  \App\Models\NurseCaringData  $nurseCaringData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNurseCaringDataRequest $request, NurseCaringData $nurseCaringData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NurseCaringData  $nurseCaringData
     * @return \Illuminate\Http\Response
     */
    public function destroy(NurseCaringData $nurseCaringData)
    {
        //
    }
}
