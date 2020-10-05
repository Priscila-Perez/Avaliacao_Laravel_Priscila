<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'descricao', 'conteudo', 'preco', 'categoria', 'imagem',
    ];
}
