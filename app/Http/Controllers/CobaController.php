<?php

namespace App\Http\Controllers;

use App\siswa;
use Illuminate\Http\Request;

class CobaController extends Controller
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
     * @param  \App\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function show( $siswa)
    {
        $siswa=siswa::find($siswa);
        return $siswa;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function edit( $coba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $coba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function destroy( $coba)
    {
        //
    }
}
