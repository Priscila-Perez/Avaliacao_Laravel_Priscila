<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabeliao extends Model
{
    protected $fillable = [
        'nome'
    ];

    protected $table = 'tabeliao';
    protected $primaryKey = 'nome';
    public $timestamps = false;
}
