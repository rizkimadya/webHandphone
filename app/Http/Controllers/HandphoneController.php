<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $handphone = Handphone::all();
        return view('admin.handphone.index', compact('handphone'));
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
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function show(Handphone $handphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function edit(Handphone $handphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Handphone $handphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Handphone $handphone)
    {
        //
    }
}
