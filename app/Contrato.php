<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'tipo_contrato', 'nome_envolvido_1', 'nome_envolvido_2', 
        'data_contrato', 'valor', 'nome_tabeliao'
    ];

    protected $table = 'contrato';
    protected $primaryKey = 'id_contrato';
    public $timestamps = false;
}
