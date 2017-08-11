<?php

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/aecos', function () {
    return view('pages.aecos');
});

Route::get('/cases', 'CasesController@inicio');

Route::get('/cases/{item}', 'CasesController@caseDetail');

Route::get('/servicos', 'ServicesController@inicio');

Route::get('/servicos/{item}', 'ServicesController@servicoDetail');

Route::get('/contato', function () {
    return view('pages.contato');
});