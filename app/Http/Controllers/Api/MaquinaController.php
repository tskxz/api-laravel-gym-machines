<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Maquina;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMaquinaRequest;
use App\Http\Resources\MaquinaResource;

class MaquinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maquinas = Maquina::all();
        return MaquinaResource::collection($maquinas);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMaquinaRequest $request)
    {
        $maquina = Maquina::create($request->validated());
        return new MaquinaResource($maquina);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $maquina = Maquina::findOrFail($id);
        return new MaquinaResource($maquina);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMaquinaRequest $request, Maquina $maquina)
    {
        $maquina->update($request->validated());
        return new MaquinaResource($maquina);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maquina $maquina)
    {
        $maquina->delete();
        return response(null, 204);
    }
}
