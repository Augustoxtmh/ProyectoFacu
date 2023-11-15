<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_pedidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pedido',
        'id_vestidos',
        'cantidad',
        'subtotal',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}