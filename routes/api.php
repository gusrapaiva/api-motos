<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoController;


route::get('/', function() {return response()->json(['Sucesso' => true]);});
route::get('/motos', [MotoController::class, 'index']);
route::post('/store-motos', [MotoController::class, 'store']);
route::get('/find-motos/{id}', [MotoController::class, 'show']);
route::put('/update-motos/{id}', [MotoController::class, 'update']);
route::delete('/destroy-motos/{id}', [MotoController::class, 'destroy']);