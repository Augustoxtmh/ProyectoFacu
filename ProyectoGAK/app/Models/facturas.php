<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facturas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_venta',
        'fecha_factura',
        'detalles',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}