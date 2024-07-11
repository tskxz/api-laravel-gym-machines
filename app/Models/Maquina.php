<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Maquina extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'estado',
        'musculo_id',
        'marca_id',
    ];

    /**
     * Get the musculo that owns the Maquina
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function musculo(): BelongsTo
    {
        return $this->belongsTo(Musculo::class);
    }
}
