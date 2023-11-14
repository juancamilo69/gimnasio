<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sedes extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDSEDE';
    protected $fillable = ['IDSEDE', 'NOMBRE', 'CIUDAD', 'DIRECCION'];
}
