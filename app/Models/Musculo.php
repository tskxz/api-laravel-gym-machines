<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musculo extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    /**
     * Get all of the maquinas for the Musculo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maquinas(): HasMany
    {
        return $this->hasMany(Maquina::class);
    }
}
