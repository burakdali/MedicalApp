<?php

namespace App\Http\Controllers;

use App\Models\ConsultantReply;
use App\Http\Requests\StoreConsultantReplyRequest;
use App\Http\Requests\UpdateConsultantReplyRequest;

class ConsultantReplyController extends Controller
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
     * @param  \App\Http\Requests\StoreConsultantReplyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConsultantReplyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConsultantReply  $consultantReply
     * @return \Illuminate\Http\Response
     */
    public function show(ConsultantReply $consultantReply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConsultantReply  $consultantReply
     * @return \Illuminate\Http\Response
     */
    public function edit(ConsultantReply $consultantReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConsultantReplyRequest  $request
     * @param  \App\Models\ConsultantReply  $consultantReply
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConsultantReplyRequest $request, ConsultantReply $consultantReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConsultantReply  $consultantReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsultantReply $consultantReply)
    {
        //
    }
}
