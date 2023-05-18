<?php

namespace App\Http\Controllers;

use App\Models\PatientData;
use App\Http\Requests\StorePatientDataRequest;
use App\Http\Requests\UpdatePatientDataRequest;

class PatientDataController extends Controller
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
     * @param  \App\Http\Requests\StorePatientDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientData  $patientData
     * @return \Illuminate\Http\Response
     */
    public function show(PatientData $patientData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientData  $patientData
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientData $patientData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientDataRequest  $request
     * @param  \App\Models\PatientData  $patientData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientDataRequest $request, PatientData $patientData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientData  $patientData
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientData $patientData)
    {
        //
    }
}
