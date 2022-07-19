<?php

namespace App\Http\Controllers;

use App\Models\manager;
use App\Http\Requests\StoremanagerRequest;
use App\Http\Requests\UpdatemanagerRequest;

class ManagerController extends Controller
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
     * @param  \App\Http\Requests\StoremanagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremanagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(manager $manager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemanagerRequest  $request
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemanagerRequest $request, manager $manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(manager $manager)
    {
        //
    }
}
