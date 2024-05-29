<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('center.home')->with('layout', 'layouts.login');
})->name('home');

Route::get('/servicios', function () {
    return view('center.servicios')->with('layout', 'layouts.center');
})->name('servicios');

Route::get('/proyectos', function () {
    return view('center.proyectos')->with('layout', 'layouts.center');
})->name('proyectos');

Route::get('/clientes', function () {
    return view('center.clientes')->with('layout', 'layouts.center');
})->name('clientes');

Route::get('/blog', function () {
    return view('center.blog')->with('layout', 'layouts.center');
})->name('blog');

Route::get('/contacto', function () {
    return view('center.contacto')->with('layout', 'layouts.center');
})->name('contacto');
