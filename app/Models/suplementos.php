<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suplementos extends Model
{
    use HasFactory;

    protected $table = 'suplementos';
    protected $fillable = ['IDSUPLEMENTO', 'NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL'];
    protected $primaryKey = 'IDSUPLEMENTO';
}
