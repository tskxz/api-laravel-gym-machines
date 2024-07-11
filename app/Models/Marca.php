<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['nome'];
    use HasFactory;

    public function maquinas(): HasMany{
        return $this->hasMany(Maquina::class);
    }
}
