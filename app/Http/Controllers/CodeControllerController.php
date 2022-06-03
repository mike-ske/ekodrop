<?php

namespace App\Http\Controllers;

use App\Models\CodeController;
use Illuminate\Http\Request;

class CodeControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.onetimecode.verifyOTP');
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
     * @param  \App\Models\CodeController  $codeController
     * @return \Illuminate\Http\Response
     */
    public function show(CodeController $codeController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CodeController  $codeController
     * @return \Illuminate\Http\Response
     */
    public function edit(CodeController $codeController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CodeController  $codeController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CodeController $codeController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CodeController  $codeController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CodeController $codeController)
    {
        //
    }
}
