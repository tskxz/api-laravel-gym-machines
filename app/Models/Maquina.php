<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'estado'
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
