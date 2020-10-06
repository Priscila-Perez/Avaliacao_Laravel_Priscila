<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'admin\HomeController@index')
->name('home');
Route::get('/home', 'admin\HomeController@index')
->name('home');

//Rotas Tabeliões
Route::get('/admin/tabelioes', 'admin\TabeliaoController@index')
->name('admin.tabelioes');
Route::get('/admin/tabelioes/adicionar', 'admin\TabeliaoController@adicionar')
->name('admin.tabelioes.adicionar');
Route::post('admin/tabelioes/salvar', 'admin\TabeliaoController@salvar')
->name('admin.tabelioes.salvar');
Route::get('/admin/tabelioes/editar/{id}', 'admin\TabeliaoController@editar')
->name('admin.tabelioes.editar');
Route::put('/admin/tabelioes/atualizar/{id}', 'admin\TabeliaoController@atualizar')
->name('admin.tabelioes.atualizar');
Route::delete('/admin/tabelioes/deletar/{id}', 'admin\TabeliaoController@deletar')
->name('admin.tabelioes.deletar');


//Rotas Certidões
Route::get('/admin/certidoes', 'admin\CertidaoController@index')
->name('admin.certidoes');
Route::get('/admin/certidoes/adicionar', 'admin\CertidaoController@adicionar')
->name('admin.certidoes.adicionar');
Route::post('admin/certidoes/salvar', 'admin\CertidaoController@salvar')
->name('admin.certidoes.salvar');
Route::get('/admin/certidoes/editar/{id}', 'admin\CertidaoController@editar')
->name('admin.certidoes.editar');
Route::put('/admin/certidoes/atualizar/{id}', 'admin\CertidaoController@atualizar')
->name('admin.certidoes.atualizar');
Route::delete('/admin/certidoes/deletar/{id}', 'admin\CertidaoController@deletar')
->name('admin.certidoes.deletar');


//Rotas Contratos
Route::get('/admin/contratos', 'admin\ContratoController@index')
->name('admin.contratos');
Route::get('/admin/contratos/adicionar', 'admin\ContratoController@adicionar')
->name('admin.contratos.adicionar');
Route::post('admin/contratos/salvar', 'admin\ContratoController@salvar')
->name('admin.contratos.salvar');
Route::get('/admin/contratos/editar/{id}', 'admin\ContratoController@editar')
->name('admin.contratos.editar');
Route::put('/admin/contratos/atualizar/{id}', 'admin\ContratoController@atualizar')
->name('admin.contratos.atualizar');
Route::delete('/admin/contratos/deletar/{id}', 'admin\ContratoController@deletar')
->name('admin.contratos.deletar');


