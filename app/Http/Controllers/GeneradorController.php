<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class GeneradorController extends Controller
{
    public function imprimir(){
        $today = Carbon::now()->format('d/m/Y');
        $pdf = \PDF::loadView('ejemplo', compact('today'));
        return $pdf->download('ejemplo.pdf');
        }
}
