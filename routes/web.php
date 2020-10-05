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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Produtos
Route::get('/admin/produtos', 'admin\ProdutoController@index')
    ->name('admin.produtos');
Route::get('/admin/produtos/adicionar', 'admin\ProdutoController@adicionar')
    ->name('admin.produtos.adicionar');
Route::post('/admin/produtos/salvar', 'admin\ProdutoController@salvar')
    ->name('admin.produtos.salvar');
Route::get('admin/produtos/editar/{id}', 'admin\ProdutoController@editar')
    ->name('admin.produtos.editar');
Route::put('admin.produtos/atualizar/{id}', 'admin\ProdutoController@atualizar')
    ->name('admin.produtos.atualizar');
Route::delete('admin/produtos/deletar/{id}', 'admin\ProdutoController@deletar')
    ->name('admin.produtos.deletar');

Auth::routes();


