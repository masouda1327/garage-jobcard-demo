<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobCardController;

Route::get('/', [JobCardController::class, 'index']);
Route::post('/generate-pdf', [JobCardController::class, 'generatePDF']);
