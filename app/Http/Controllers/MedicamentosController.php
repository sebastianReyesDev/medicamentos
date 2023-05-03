<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamentosController extends Controller
{
    /**
     * index para mostrar todos los medicamentos
     * score para guardar medicamentos
     * update para actualizar un medicamento
     * destroy para eliminar
     * edit para mostrar un formulario de edicion
     */
    
    public function index()
    {
    $medicamentos = Medicamento::all();
    return view('medicamentos.index', compact('medicamentos'));
    }
    
    public function score(Request $request){

        $request -> validate([
            'nombre' => 'required|min:3',
            'tipo' => 'required',
            'presentacion' => 'required',
            'fecha' => 'required',
            'gramaje' => 'required',
            'fecha_caducidad' => 'required|date',
            'unidades' => 'required|integer',
        ]);
    
        $medicamento = new Medicamento;
        $medicamento -> nombre = $request -> nombre;
        $medicamento -> tipo = $request -> tipo;
        $medicamento -> presentacion = $request -> presentacion;
        $medicamento -> fecha = $request -> fecha;
        $medicamento -> gramaje = $request -> gramaje;
        $medicamento -> fecha_caducidad = $request -> fecha_caducidad;
        $medicamento -> unidades = $request -> unidades;
        $medicamento -> save();
    
        return redirect()->route('medicamentos.complete')->with('success', 'Medicamento registrado correctamente');    
    }

    public function update(Request $request, $id)
    {
    $medicamento = Medicamento::find($id);

    $medicamento->nombre = $request->input('nombre');
    $medicamento->tipo = $request->input('tipo');
    $medicamento->presentacion = $request->input('presentacion');
    $medicamento->gramaje = $request->input('gramaje');
    $medicamento->fecha_caducidad = $request->input('fecha_caducidad');
    $medicamento->unidades = $request->input('unidades');
    $medicamento->fecha = $request->input('fecha');

    $medicamento->save();
    
    return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado correctamente'); 
    }



public function destroy($id)
{
    $medicamento = Medicamento::findOrFail($id);
    $medicamento->delete();
    
    return redirect()->route('medicamentos.complete')->with('success', 'Medicamento eliminado exitosamente');
}

    
    public function edit()
    {
        $medicamentos = Medicamento::all();
        return view('medicamentos.edit', compact('medicamentos'));
    }
}