<?php

namespace App\Http\Controllers\admin;


use App\Certidao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CertidaoController extends CrudController
{
   public function __construct()
   {
       $this->classe = Certidao::class;
       $this->view = 'admin.certidoes';
   }

}
