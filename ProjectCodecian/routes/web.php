<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App;
use App\Http\Controllers\companycontroller;
use App\Http\Controllers\staffcontroller;
use App\Http\Controllers\adresscontroller;


Route::get('/',[companycontroller::class,'index']);

//Companies Routes

Route::get('/add-company',[companycontroller::class,'addcompany']);

Route::post('/create-company',[companycontroller::class,'createcompany'])->name('company.create');

Route::get('/main',[companycontroller::class,'index']);

Route::get('/main/{id}',[companycontroller::class,'getId']);

Route::get('/delete-company/{id}',[companycontroller::class,'deletecompany']);

Route::get('/edit-company/{id}',[companycontroller::class,'edit']);

Route::post('/update-company',[companycontroller::class,'updatecompany'])->name('company.update');

//Staff Routes

Route::get('/staffmain/{comp_id}',[staffcontroller::class,'index']);

Route::get('/add-person/{comp_id}',[staffcontroller::class,'addperson']);

Route::post('/create-person',[staffcontroller::class,'createperson'])->name('person.create');

Route::get('/edit-person/{id}',[staffcontroller::class,'edit']);

Route::post('/update-person',[staffcontroller::class,'updateperson'])->name('person.update');

Route::get('/delete-person/{id}',[staffcontroller::class,'deleteperson']);

//Adress Routes

Route::get('/adressmain/{comp_id}',[adresscontroller::class,'index']);

Route::get('/add-adress/{comp_id}',[adresscontroller::class,'addadress']);

Route::post('/create-adress',[adresscontroller::class,'createadress'])->name('adress.create');
?>
