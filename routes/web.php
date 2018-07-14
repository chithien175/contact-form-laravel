<?php
use ThienPham\Contacts\Http\Controllers\ContactsController;

Route::get('contacts', [ 
	'uses' => 'ThienPham\Contacts\Http\Controllers\ContactsController@index'
]);
Route::post('contacts', [
	'uses' => 'ThienPham\Contacts\Http\Controllers\ContactsController@store',
	'as'	=> 'store.thienpham.contact'
]);