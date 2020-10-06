<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    protected $fillable = [
        'tipo_certidao', 'nome_envolvido_1', 'nome_envolvido_2', 
        'data_certidao', 'nome_tabeliao'
    ];

    protected $table = 'certidao';
    protected $primaryKey = 'id_certidao';
    public $timestamps = false;
}
