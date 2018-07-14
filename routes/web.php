<?php

Route::get('contacts', [ 'uses' => 'thienpham\contacts\ContactsController@index']);
Route::post('contacts', [
	'uses' => 'thienpham\contacts\ContactsController@store',
	'as'	=> 'store.thienpham.contact'
]);