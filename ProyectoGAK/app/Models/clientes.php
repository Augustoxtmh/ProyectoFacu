<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'Apellido',
        'Direccion',
        'Correo',
        'Telefono',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}