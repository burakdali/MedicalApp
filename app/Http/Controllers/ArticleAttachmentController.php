<?php

namespace App\Http\Controllers;

use App\Models\ArticleAttachment;
use App\Http\Requests\StoreArticleAttachmentRequest;
use App\Http\Requests\UpdateArticleAttachmentRequest;

class ArticleAttachmentController extends Controller
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
     * @param  \App\Http\Requests\StoreArticleAttachmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleAttachmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleAttachment  $articleAttachment
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleAttachment $articleAttachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleAttachment  $articleAttachment
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleAttachment $articleAttachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleAttachmentRequest  $request
     * @param  \App\Models\ArticleAttachment  $articleAttachment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleAttachmentRequest $request, ArticleAttachment $articleAttachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleAttachment  $articleAttachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleAttachment $articleAttachment)
    {
        //
    }
}
