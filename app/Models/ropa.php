<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ropa extends Model
{
    use HasFactory;

    protected $primaryKey = 'IDROPA';
    protected $fillable = ['NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA', 'COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3'];
}
