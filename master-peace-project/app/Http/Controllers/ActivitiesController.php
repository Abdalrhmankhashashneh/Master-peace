<?php

namespace App\Http\Controllers;

use App\Models\activities;
use App\Http\Requests\StoreactivitiesRequest;
use App\Http\Requests\UpdateactivitiesRequest;

class ActivitiesController extends Controller
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
     * @param  \App\Http\Requests\StoreactivitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreactivitiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function show(activities $activities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function edit(activities $activities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateactivitiesRequest  $request
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateactivitiesRequest $request, activities $activities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activities  $activities
     * @return \Illuminate\Http\Response
     */
    public function destroy(activities $activities)
    {
        //
    }
}
