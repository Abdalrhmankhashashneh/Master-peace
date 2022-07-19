<?php

namespace App\Http\Controllers;

use App\Models\assigment;
use App\Http\Requests\StoreassigmentRequest;
use App\Http\Requests\UpdateassigmentRequest;

class AssigmentController extends Controller
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
     * @param  \App\Http\Requests\StoreassigmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreassigmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\assigment  $assigment
     * @return \Illuminate\Http\Response
     */
    public function show(assigment $assigment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\assigment  $assigment
     * @return \Illuminate\Http\Response
     */
    public function edit(assigment $assigment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateassigmentRequest  $request
     * @param  \App\Models\assigment  $assigment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateassigmentRequest $request, assigment $assigment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\assigment  $assigment
     * @return \Illuminate\Http\Response
     */
    public function destroy(assigment $assigment)
    {
        //
    }
}
