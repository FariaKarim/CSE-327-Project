<?php

/*
**All routes that can viewed by everyone
*/

//home page
Route::get('/', 'doctorController@viewHome')->name('dHome');

//food
Route::get('/admin', 'adminController@viewHome')->name('aHome');
 Route::get('/formFood','adminController@viewFormFood')->name('formFood');
Route::post('/formFood', 'adminController@submitFood');
//doctor
Route::get('/doctorList', 'adminController@viewDoctor')->name('aDoctor');
 Route::get('/formDoctor','adminController@viewFormDoctor')->name('formDoctor');
Route::post('/formDoctor', 'adminController@submitDoctor');
//ambulance
Route::get('/ambulanceList', 'adminController@viewAmbulance')->name('aAmbulance');
 Route::get('/formAmbulance','adminController@viewFormAmbulance')->name('formAmbulance');
Route::post('/formAmbulance', 'adminController@submitAmbulance');
//medicine
Route::get('/medicineList', 'adminController@viewMedicine')->name('aMedicine');
 Route::get('/formMedicine','adminController@viewFormMedicine')->name('formMedicine');
Route::post('/formMedicine', 'adminController@submitMedicine');



