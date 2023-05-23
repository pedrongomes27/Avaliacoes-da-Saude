<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEstablishments extends Model
{
    use HasFactory;

    protected $table = 'company_establishments';
    protected $fillable =
    [
        'cod_unidade_cnes',
        'no_unidade',
        'ft_unidade',
        'end_logradouro',
        'end_numero',
        'end_bairro',
        'end_latidude',
        'end_longitude',
        'con_unidade_1',
        'con_unidade_2',
        'con_unidade_3',
        'st_unidade',
    ];

}
