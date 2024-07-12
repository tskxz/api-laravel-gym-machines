<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMarcaRequest;
use App\Http\Resources\MarcaResource;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::all();
        return MarcaResource::collection($marcas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarcaRequest $request)
    {
        $marca = Marca::create($request->validated());
        return new MarcaResource($marca);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $marca = marca::findOrFail($id);
        return new MarcaResource($marca);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMarcaRequest $request, Marca $marca)
    {
        $marca->update($request->validated());
        return new MarcaResource($marca);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca)
    {
        $marca->delete();
        return response(null, 204);
    }
}
