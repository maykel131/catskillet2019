<?php

Route::get('/','ControllerPaginaIncial@index')->name('paginainicial.index');
Route::post('paginainicial/store', 'ControllerPaginaIncial@store')->name('paginainicial.store');
Route::get('paginainicial/{id}', 'ControllerPaginaIncial@show')->name('paginainicial.show');
// href="{{ route('paginainicial.show', $med->id_medico) }}" 
