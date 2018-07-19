<?php
Route::group(['middleware' => ['web']], function () {
	Route::post('contacts', [
		'uses' => 'ThienPham\Contacts\Http\Controllers\ContactsController@contactStore',
		'as'	=> 'store.thienpham.contact'
	]);
});