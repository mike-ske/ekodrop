<?php

namespace App\Http\Controllers;

use App\Models\ServiceController;
use Illuminate\Http\Request;

class ServiceControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.pickup');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceController  $serviceController
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceController $serviceController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceController  $serviceController
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceController $serviceController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceController  $serviceController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceController $serviceController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceController  $serviceController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceController $serviceController)
    {
        //
    }
}
