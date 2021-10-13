<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PlanillaController extends Controller
{
    public function index() {
        return Inertia::render('Planilla.index',['var1'=>'Gonza']);
    }
}
