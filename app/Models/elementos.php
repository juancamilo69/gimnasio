<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class elementos extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDELEMENTO';
    protected $fillable = ['IDSEDE', 'NOMBRE', 'TIPO', 'USO', 'FECHACOMPRA', 'IMGELEMENTO', 'SOPORTE'];
}
