<?php

Route::post('/register', 'Auth\RegisterController@register');
Route::get('/register', 'RegistrationController@getEmailRegistrationFrom');
Route::post('/registrasi/submit-email', 'RegistrationController@validateEmailRegistration')->name('registrasi.kirim');
Route::get('/registrasi/{token}', 'RegistrationController@tokenCheck');