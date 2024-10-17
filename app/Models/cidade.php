<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
    use HasFactory;
    protected $primaryKey = 'idCidade';
    protected $fillable = [
        'nomeCidade',
        'numeroPopulacao',
        'siglaCidade',
        'nomeVereador',
    ];
}
