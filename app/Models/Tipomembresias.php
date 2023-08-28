<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipomembresias extends Model
{
    use HasFactory;
    protected $primaryKey = 'IDTIPOSMEMBRESIAS';
    protected $fillable = ['NOMBREMEMBRESIA', 'DESCRIPCION', 'PRECIO', 'PLANPAREJA'];
}
