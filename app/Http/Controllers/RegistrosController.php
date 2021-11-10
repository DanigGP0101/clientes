<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registros;
use Illuminate\support\Facades\Validator;

class RegistrosController extends Controller
{
    public function index(){
        $registros = Registros::all();
        return view('registros.index', compact('registros'));
    }
    /*prueba*/
    public function login(){
        $registros = Registros::all();
        return view('registros.login', compact('registros'));
    }
    /*prueba*/
    public function create(){
        return view('registros.create');
    }

    public function save(Request $request){
        $input = $request->all();

        $validator = Validator::make($input, [
            'nombre' => 'required|max:40|min:2',
            'apellido' => 'required|max:40|min:2',
            'cedula' => 'required|max:15|min:7',
            'telefono' => 'required|max:15|min:7',
            'direccion' => 'required|max:45|min:10',
            'email' => 'required|max:45|min:12',
            'password' => 'required|max:10|min:3',
        ]);

        if ($validator->fails()) {
            return redirect('/registros/create')
                        ->withErrors($validator)
                        ->withInput();
        }


        Registros::create([
            "nombre" => $input["nombre"],
            "apellido" => $input["apellido"],
            "cedula" => $input["cedula"],
            "telefono" => $input["telefono"],
            "direccion" => $input["direccion"],
            "email" => $input["email"],
            "password" => $input["password"]
        ]);

        return redirect("/registros");
    }

    public function edit($id){
        $registros = Registros::find($id);
        if($registros == null){
            return redirect("/registros");
        }
        return view("registros.edit", compact("registros"));
    }

    public function update(Request $request){
        $input = $request->all();
        $registros = Registros::find($input["id"]);
        if($registros == null){
            return redirect("/registros");
        }
        $registros->update([
            "nombre" => $input["nombre"],
            "apellido" => $input["apellido"],
            "cedula" => $input["cedula"],
            "telefono" => $input["telefono"],
            "direccion" => $input["direccion"],
            "email" => $input["email"],
            "password" => $input["password"]
        ]);

        return redirect("/registros");
    }

    public function update_state($id){
        $registros = Registros::find($id);
        if ($registros == null){
            return redirect("/registros");
        }
        
        $registros->update([
            "state" => $registros->state == 1 ? 0 : 1
        ]);

        return redirect("/registros");
    }
}
