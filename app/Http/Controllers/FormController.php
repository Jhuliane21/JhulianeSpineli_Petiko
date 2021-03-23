<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function PegaDados(Request $request){
        $nome = $request->query('nome');
        $cep =$request->query('cep');
        $rua = $request->query('rua');
        $bairro = $request->query('bairro');
        $cidade = $request->query('cidade');
        $numero = $request->query('numero');
        if(isset($cep) && isset($nome) && isset($rua) && isset($bairro) && isset($cidade) && isset($numero)){
            $url = "https://api.postmon.com.br/v1/cep/".$cep;
            $resposta = file_get_contents($url);
            $respostaPHP = json_decode($resposta);
            if($request->query('rua') == $respostaPHP->logradouro && $request->query('cep') == $respostaPHP->cep && $request->query('bairro') == $respostaPHP->bairro && $request->query('cidade') == $respostaPHP->cidade){
                echo "Cadastro realizado com sucesso!";
            }else{
                echo "Existem problemas com o seu cadastro";
            }
        }else{
            echo "Termine de preencher os campos!";
    }
        //print_r($respostaPHP->cidade);
        return view("Formulario");
    }

}
