<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role ;
use Spatie\Permission\Models\Permission;


class Roles extends Controller
{

    public function index()
    {
        //Creo un rol de creacion
        $rolAdmin = Role::create(['name' => 'Administrador']); //Puede hacer todo
        $rolEditor = Role::create(['name' => 'Editor']); //Puede editar y ver, pero no crear ni borrar

        //Creamos permisos para los roles
        $permission = Permission::create(['name' => 'Borrar']); //Puede borrar, pero no editar ni crear
        $permission = Permission::create(['name' => 'Editar']); //Puede borrar, pero no editar ni crear
        $permission = Permission::create(['name' => 'Crear']); //Puede borrar, pero no editar ni crear

        //Asignamos permisos a los roles




    }
    //
}
