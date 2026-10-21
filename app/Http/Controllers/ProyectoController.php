<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    //listar todos los proyectos
    public function index()
    {
        $proyectos =[
            ['id' => 1, 'nombre' => 'Sistema Web TeachSolutions', 'fecha_inicio' => '2026-10-01', 'estado' => 'En Proceso', 'responsable' => 'Jean pierre', 'monto' => 15000.00],
            ['id' => 2, 'nombre' => 'Migracion Cloude', 'fecha_inicio' => '2023-02-10', 'estado' => 'Pendiente', 'responsable' => 'Equipo Backend', 'monto' => 20000.00],
        ];
        return view('proyectos.index', compact('proyectos'));
    }
    // vista para crear un GET
    public function create()
    {
        return view('proyectos.create'); 

    }
    //guardar el proyecto creado en la base de datos POST
    public function store(Request $request)
    {
        //logica para guardar el proyecto en la base de datos
        return redirect()->route('proyectos.index') ->with('success', 'Proyecto creado exitosamente');
    }
    //obtener un proyecto por su id
    public function show($id)
    {
        $proyecto = ['id' => $id, 'nombre' => 'Proyecto prueba ID'. $id, 'fecha_inicio' => '2026-10-01', 'estado' => 'Activo', 'responsable' => 'Jean pierre', 'monto' => 15000.00];
        return view('proyectos.show', compact('proyecto'));
    }
    //actualizar un proyecto por su id PUT/PATCH
    public function update(Request $request, $id)
    {
        //logica para actualizar el royecto Backend
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente');
    }
    //eliminar un proyecto por su id DELETE
    public function destroy($id)
    {
        //logica para eliminar el proyecto Backend
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente');
    }
}   