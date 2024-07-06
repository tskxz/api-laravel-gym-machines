<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Musculo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMusculoRequest;
use App\Http\Resources\MusculoResource;

class MusculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musculos = Musculo::all();
        return MusculoResource::collection($musculos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusculoRequest $request)
    {
        $musculo = Musculo::create($request->validated());
        return new MusculoResource($musculo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMusculoRequest $request, Musculo $musculo)
    {
        $musculo->update($request->validated());
        return new MusculoResource($musculo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Musculo $musculo)
    {
        $musculo->delete();
        return response(null, 204);
    }
}
