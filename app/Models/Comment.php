<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
    'post_id',
    'user_id',
    'calidad_general',
    'facilidad',
    'clase',
    'calificacion_recibida',
    'description'];
}
