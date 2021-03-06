<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Validator\AdministradorValidator;
use App\Models\Administrador;

class EditAdministradorController extends Controller
{
    public function prepararAtualizacao($id){
        if(Auth::guard('admin')->check()) {
            $administrador = Administrador::find($id);
            return view('editarAdministrador', ['administrador' => $administrador]);
        }
        else{
            return view('permissaoNegada');
        }
    }

    public function atualizar(Request $request, $id){
        if(Auth::guard('admin')->check()) {
            $administrador = Administrador::find($id);
            try {
                $dados = $request->all();
                AdministradorValidator::validateEditar($dados);
                $dados['password'] = Hash::make($dados['password']);
                $administrador->update($dados);
                return redirect('/visualizar/administrador/' . $administrador->id);
            } catch (\App\Validator\ValidationException $exception) {
                return redirect('/editar/administrador/' . $administrador->id)->withErrors($exception->getValidator())->withInput();
            }
        }
        else{
            return view('permissaoNegada');
        }
    }
}
