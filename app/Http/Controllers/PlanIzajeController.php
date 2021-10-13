<?php

namespace App\Http\Controllers;

use App\Models\PlanIzaje;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlanIzajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json( ['name' => 'Abigail',
            'state' => 'CA',
            ] );
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
     * @param  \App\Models\PlanIzaje  $planIzaje
     * @return \Illuminate\Http\Response
     */
    public function show(PlanIzaje $planIzaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlanIzaje  $planIzaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanIzaje $planIzaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanIzaje  $planIzaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanIzaje $planIzaje)
    {
        //
    }
}
