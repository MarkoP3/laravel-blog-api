<?php

namespace App\Http\Controllers;

use App\Models\PostBlock;
use App\Http\Requests\StorePostBlockRequest;
use App\Http\Requests\UpdatePostBlockRequest;

class PostBlockController extends Controller
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
     * @param  \App\Http\Requests\StorePostBlockRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostBlockRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostBlock  $postBlock
     * @return \Illuminate\Http\Response
     */
    public function show(PostBlock $postBlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostBlock  $postBlock
     * @return \Illuminate\Http\Response
     */
    public function edit(PostBlock $postBlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostBlockRequest  $request
     * @param  \App\Models\PostBlock  $postBlock
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostBlockRequest $request, PostBlock $postBlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostBlock  $postBlock
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostBlock $postBlock)
    {
        //
    }
}
