<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentesController extends Controller
{
    public function componentes()
    {
        $subtitulo = 'Lista de Componentes';
        $componentes = ['Capacitor', 'Diodo', 'Fusivel', 'Resistor', 'Transistor'];
        return view('admin.componentes.index', compact('subtitulo', 'componentes'));
    }
}
