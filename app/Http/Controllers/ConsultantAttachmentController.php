<?php

namespace App\Http\Controllers;

use App\Models\ConsultantAttachment;
use App\Http\Requests\StoreConsultantAttachmentRequest;
use App\Http\Requests\UpdateConsultantAttachmentRequest;

class ConsultantAttachmentController extends Controller
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
     * @param  \App\Http\Requests\StoreConsultantAttachmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultantAttachmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConsultantAttachment  $consultantAttachment
     * @return \Illuminate\Http\Response
     */
    public function show(ConsultantAttachment $consultantAttachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConsultantAttachment  $consultantAttachment
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsultantAttachment $consultantAttachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConsultantAttachmentRequest  $request
     * @param  \App\Models\ConsultantAttachment  $consultantAttachment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultantAttachmentRequest $request, ConsultantAttachment $consultantAttachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConsultantAttachment  $consultantAttachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultantAttachment $consultantAttachment)
    {
        //
    }
}
