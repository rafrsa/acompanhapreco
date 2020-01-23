<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Goutte\Client;

class ProdutoController extends Controller{

    public function index(){
        return view('produto_lista');
    }
    public function getProdutosAtivos($idUsuario){
        $sql = "SELECT *
                FROM produtos pro
                INNER JOIN provedores prv ON prv.provedor_id = pro.provedor_id
                WHERE pro.usuario_id = {$idUsuario}                
                  AND pro.produto_ativo = true";

        $list_produtos = DB::select($sql);

        $dataProd = [];

        $client = new Client();
        foreach ($list_produtos as $keyProd => $valueProd){
            $crawler = $client->request('GET', $valueProd->produto_url);

            $dataTemp = [];
            $dataTemp['provedor'] = $valueProd->provedor_nome;
            $tempProdutos = [];
            if($valueProd->provedor_nome == "submarino") {
                $tempProdutos = $crawler->filter('p[class=sales-price], h1[class=product-name]')->each(function ($node) {
                    return $node->text();
                });
                $dataTemp['nome_produto'] = $tempProdutos[0];
                $dataTemp['valor_produto'] = explode("$", $tempProdutos[1])[1];
                $dataTemp['url'] = $valueProd->produto_url;
            }else if($valueProd->provedor_nome == "mercado livre") {
                $tempProdutos = $crawler->filter('span[class=price-tag-fraction], span[class=price-tag-cents], title')->each(function ($node) {
                    return $node->text();
                });
                $dataTemp['nome_produto'] = trim(explode("- R$", $tempProdutos[0])[0]);
                $dataTemp['valor_produto'] = trim($tempProdutos[1]).",".trim($tempProdutos[2]);
                $dataTemp['url'] = $valueProd->produto_url;
            }else if($valueProd->provedor_nome == "Playstation Store") {
                $tempProdutos = $crawler->filter('h3[class=price-display__price], h2[class=pdp__title], img[class=product-image__img-main--show]')->each(function ($node) {
                    return $node->text();
                });
                $dataTemp['nome_produto'] = $tempProdutos[1];
                $dataTemp['valor_produto'] = explode("$", $tempProdutos[0])[1];
                $dataTemp['url'] = $valueProd->produto_url;
            }

            $dataProd[] = $dataTemp;
        }

        return $dataProd;
    }
}
