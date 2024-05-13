<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;


route::get('/', function() {return response()->json(['Sucesso' => true]);});
route::get('/motos', [MotoController::class, 'index']);
route::post('/motos', [MotoController::class, 'store']);