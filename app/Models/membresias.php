<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membresias extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDMEMBRESIA';
    protected $fillable = ['id', 'id2', 'IDTIPOSMEMBRESIAS', 'FECHAMEMBRESIAINICIO', 'FECHAMEMBRESIAFINAL', 'MONTOPAGO'];
}
