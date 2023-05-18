<?php

namespace App\Http\Controllers;

use App\Models\NurseDocs;
use App\Http\Requests\StoreNurseDocsRequest;
use App\Http\Requests\UpdateNurseDocsRequest;

class NurseDocsController extends Controller
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
     * @param  \App\Http\Requests\StoreNurseDocsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNurseDocsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NurseDocs  $nurseDocs
     * @return \Illuminate\Http\Response
     */
    public function show(NurseDocs $nurseDocs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NurseDocs  $nurseDocs
     * @return \Illuminate\Http\Response
     */
    public function edit(NurseDocs $nurseDocs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNurseDocsRequest  $request
     * @param  \App\Models\NurseDocs  $nurseDocs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNurseDocsRequest $request, NurseDocs $nurseDocs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NurseDocs  $nurseDocs
     * @return \Illuminate\Http\Response
     */
    public function destroy(NurseDocs $nurseDocs)
    {
        //
    }
}
