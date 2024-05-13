<?php

namespace App\Http\Controllers;

use App\Models\moto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;

use function Laravel\Prompts\error;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dadosMotos = Moto::All();
        $counter = $dadosMotos->count();

        return 'Motos: '. $counter . $dadosMotos . Response()->json([], Response::HTTP_NO_CONTENT);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dadosMotos = $request->All();
        $validarDados = Validator::make($dadosMotos, [
            'marca' => 'required',
            'modelo' => 'required',
            'cor' => 'required',
            'ano' => 'required'
        ]);

        if($validarDados->fails()){
            return 'Dados inválidos'. $validarDados->error(true) . 500;
        }

        $motosCadastrar = Moto::create($dadosMotos);
        if($motosCadastrar){
            return "Dados cadastrados com sucesso" . Response()->json([], Response::HTTP_NO_CONTENT);
        } else {
            return "Falha ao cadastrar dados". Response()->json([], Response::HTTP_NO_CONTENT);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(moto $moto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, moto $moto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(moto $moto)
    {
        //
    }
}
