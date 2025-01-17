<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'categoria_id',
    ];
    public function Categoria (){
        return $this->hasMany(Categoria::class);
    }
}
