<?php

namespace App\Http\Controllers;

use App\Models\Taks;
use App\Http\Requests\StoreTaksRequest;
use App\Http\Requests\UpdateTaksRequest;

class TaskController extends Controller
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
    public function store(StoreTaksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Taks $taks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Taks $taks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaksRequest $request, Taks $taks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Taks $taks)
    {
        //
    }
}
