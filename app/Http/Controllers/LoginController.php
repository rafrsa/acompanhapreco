<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function authUser(Request $request){
        $data = $request->all();
        $retorno = [];

        $sql = "SELECT *
                FROM usuarios usr
                WHERE usr.usuario_email = '{$data['email']}'
                  AND usr.usuario_senha = '{$data['senha']}'";

        $user = DB::select($sql);

        if(count($user)){
            session(['login' => true]);
            session(['id' => $user[0]->usuario_id]);
            session(['nome' => $user[0]->usuario_nome]);
            session(['email' => $data['email']]);
            $retorno['status'] = 1;
            $retorno['erro'] = "Usuário logado com sucesso!";
        }else{
            session(['login' => false]);
            $retorno['status'] = 0;
            $retorno['erro'] = "Usuário não existe!";
        }

        return $retorno;
    }

    public function registerUser(Request $request){
        $data = $request->all();
        $retorno = [];

        $sql = "SELECT *
                FROM usuarios usr
                WHERE usr.usuario = '{$data['user']}'";

        $user = DB::select($sql);

        if(count($user)){
            $retorno['status'] = 0;
            $retorno['erro'] = "Usuário já cadastrado com esse usuário!";
        }else{
            $sql = "INSERT INTO usuarios(nome, usuario, senha, nivel_id, data)
                    VALUES('{$data['name']}', '{$data['user']}', '{$data['pass']}', 2, now())";

            $user = DB::select($sql);

            $retorno['status'] = 1;
            $retorno['erro'] = "Usuário cadastrado com sucesso!";
        }

        return $retorno;
    }
}
