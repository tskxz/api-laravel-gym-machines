<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MusculoResource;
use App\Http\Resources\MarcaResource;

class MaquinaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'nome'=>$this->nome,
            'descricao'=>$this->descricao,
            'musculo_id'=>$this->musculo_id,
            'marca_id'=>$this->marca_id,
            'musculo' => new MusculoResource($this->whenLoaded('musculo')),
            'marca' => new MarcaResource($this->whenLoaded('marca')),
        ];
    }
}
