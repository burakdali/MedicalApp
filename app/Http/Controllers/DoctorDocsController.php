<?php

namespace App\Http\Controllers;

use App\Models\DoctorDocs;
use App\Http\Requests\StoreDoctorDocsRequest;
use App\Http\Requests\UpdateDoctorDocsRequest;

class DoctorDocsController extends Controller
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
     * @param  \App\Http\Requests\StoreDoctorDocsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorDocsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorDocs  $doctorDocs
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorDocs $doctorDocs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorDocs  $doctorDocs
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorDocs $doctorDocs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorDocsRequest  $request
     * @param  \App\Models\DoctorDocs  $doctorDocs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorDocsRequest $request, DoctorDocs $doctorDocs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorDocs  $doctorDocs
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorDocs $doctorDocs)
    {
        //
    }
}
