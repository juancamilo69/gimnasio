<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suplementos extends Model
{
    use HasFactory;

    protected $table = 'suplementos';
    protected $primaryKey = 'IDSUPLEMENTO';
    protected $fillable = ['NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL'];
}
