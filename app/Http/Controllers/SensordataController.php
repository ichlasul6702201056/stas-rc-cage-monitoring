<?php

namespace App\Http\Controllers;

use App\Models\sensordata;
use App\Http\Requests\StoresensordataRequest;
use App\Http\Requests\UpdatesensordataRequest;

class SensordataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoresensordataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(sensordata $sensordata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sensordata $sensordata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesensordataRequest $request, sensordata $sensordata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sensordata $sensordata)
    {
        //
    }
}
