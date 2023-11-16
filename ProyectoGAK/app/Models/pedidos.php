<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cliente',
        'fecha_pedido',
        'estado_pedido',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'fecha_pedido',
    ];
}