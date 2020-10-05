<?php

namespace App\Http\Controllers\api;

use App\Produto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoController extends BaseController
{
   public function __construct()
   {
       $this->classe = Produto::class;
   }
}
