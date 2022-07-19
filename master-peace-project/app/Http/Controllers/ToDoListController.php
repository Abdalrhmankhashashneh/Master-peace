<?php

namespace App\Http\Controllers;

use App\Models\to_do_list;
use App\Http\Requests\Storeto_do_listRequest;
use App\Http\Requests\Updateto_do_listRequest;

class ToDoListController extends Controller
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
     * @param  \App\Http\Requests\Storeto_do_listRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeto_do_listRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\to_do_list  $to_do_list
     * @return \Illuminate\Http\Response
     */
    public function show(to_do_list $to_do_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\to_do_list  $to_do_list
     * @return \Illuminate\Http\Response
     */
    public function edit(to_do_list $to_do_list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateto_do_listRequest  $request
     * @param  \App\Models\to_do_list  $to_do_list
     * @return \Illuminate\Http\Response
     */
    public function update(Updateto_do_listRequest $request, to_do_list $to_do_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\to_do_list  $to_do_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(to_do_list $to_do_list)
    {
        //
    }
}
