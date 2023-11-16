<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vestidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'descripcion',
        'precio',
        'id_producto',
        'disponible',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}