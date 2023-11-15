<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cliente',
        'fecha_venta',
        'total',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'fecha_venta',
    ];
}