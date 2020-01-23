<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Controllers\ProdutoController;


class AppController extends Controller{

    public function index(Request $request){

        $dadosSessao = $request->session()->all();

        $objProdutos = new ProdutoController();
        $data['lista_produtos'] = $objProdutos->getProdutosAtivos($dadosSessao['id']);

//        dd($data);
        return view('app', $data);
    }
}
