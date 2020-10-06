<?php

namespace App\Http\Controllers\admin;

use App\Contrato;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContratoController extends CrudController
{
    public function __construct()
   {
       $this->classe = Contrato::class;
       $this->view = 'admin.contratos';
   }
}