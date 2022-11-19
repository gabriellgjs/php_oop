<?php

class Carro {
    // Uma classe tem atributos ->

    public $modelo;
    public $cor;
    public $kilometragem = 0;

    // e também o estado ->

    public $ligado = false;
    public $acelerando = false;

    // e metodós ou ações ->

    public function ligarCarro() {
        if(!$this -> ligado) {
            $this -> ligado = true;
            echo('O carro ligou!' . PHP_EOL);
            return;
        } 
        echo('O carro está desligado!' . PHP_EOL);
    }

    public function desligarCarro(){
        if($this -> ligado){
            $this-> ligado = false;
            echo('O carro desligou!' . PHP_EOL);
            return;
        }
        echo('O carro já está desligado' . PHP_EOL);
    }

    public function acelerar(int $km){
        if($this ->ligado){
            $this -> kilometragem += $km;
            echo('O carro está acerelando' . PHP_EOL);
            return;
        }
        echo('O carro está desligado!'  . PHP_EOL);
    }

    public function mostrar(){
        return $this -> kilometragem . "km";
    }

}