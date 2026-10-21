<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
Route::get('/', function () {
    return view('welcome');
});
//rutas para el CRUD de proyectos
//listar todos los proyectos
Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
//mostrar el formulario para crear un nuevo proyecto
Route::get('/proyectos/crear', [ProyectoController::class, 'create'])->name('proyectos.create');
route::post('/proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');
//mostrar un proyecto por su id
Route::get('/proyectos/{id}', [ProyectoController::class, 'show'])->name('proyectos.show');
//actualizar un proyecto por su id
Route::put('/proyectos/{id}', [ProyectoController::class, 'update'])->name('proyectos.update');
//eliminar un proyecto por su id                
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy'])->name('proyectos.destroy');