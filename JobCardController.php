<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JobCardController extends Controller
{
    public function index()
    {
        return view('jobcard');
    }

    public function generatePDF(Request $request)
    {
        $pdf = Pdf::loadView('jobcard', $request->all());
        return $pdf->download('jobcard.pdf');
    }
}
