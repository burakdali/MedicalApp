<?php

namespace App\Http\Controllers;

use App\Models\DoctorData;
use App\Http\Requests\StoreDoctorDataRequest;
use App\Http\Requests\UpdateDoctorDataRequest;

class DoctorDataController extends Controller
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
     * @param  \App\Http\Requests\StoreDoctorDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorData  $doctorData
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorData $doctorData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorData  $doctorData
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorData $doctorData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorDataRequest  $request
     * @param  \App\Models\DoctorData  $doctorData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorDataRequest $request, DoctorData $doctorData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorData  $doctorData
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorData $doctorData)
    {
        //
    }
}
