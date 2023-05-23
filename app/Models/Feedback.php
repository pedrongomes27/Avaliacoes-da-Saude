<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'nota1',
        'nota2',
        'nota3',
        'comentario',
        'log_ip',
        'no_unidade',

    ];
}
