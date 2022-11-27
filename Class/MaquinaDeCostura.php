<?php

    /*
        ENCAPSULAMENTO
            O encapuslamento, como próprio nome já diz, é deixa em capsula oculta diante a percepção do objeto instanciado.
            Um exemplo disso seria uma capsula de um rémedio, voce não sabe se o conteúdo dentro é um substancia efetiva ou não ao seu problema, podendo ser simplemente farinha ou a substancia que trata sua enfermidade.
            De maneira análoga poderia se pensa o encapsulamento.
            Isto é, o objeto instanciado não precisa saber do detalhes interno de operação de sua Classe.
            E também serve de forma, a proteger o funcionamento de uma classe. Porque quando pensamos no desenvolvimento de um software, a longo prazo, pensamos em toda em trabalho em equipe. Dessa maneira, o encapsulamento vem trazer uma padronização a respeito de um ambiente de desenolvimento com mais desenvolvedores.
            Sendo assim, o que dá acesso direto em uma classe  é palavra reservada 'public', e o que deixa privado é o 'private'
            Para um objeto poder usar encapsulamento e pode ter alterações em seus atributos e afins é criados =>
            - Getters são metódos que dão get(pegam) informações de atributos especifico;
            - Setters são metódos que dão setão(definem) informações de atributo especifico;
    */

class MaquinaDeCostura {
    private $linha = false;
    private $tipo;
    private $ligado = false;
    private $costurando = false;
    /*
        Metódo Construtor
            função que é executada quando um objeto é instânciado;
    */

    function __construct(string $tipo){
        $this->tipo = $tipo;
    }

    /*
        Criando getter e setters
    */

    function getTipo() : string {
        return $this->tipo;
    }

    function getLinha() : string {
        return $this->linha;
    }

    function getLigado() : bool {
        return $this->ligado;
    }

    function getCosturando() {
        return $this->costurando;
    }

    function setLigado(bool $estado): void {
        $this->ligado = $estado;
    }

    function setLinha(string $corLinha): void {
        $this->linha = $corLinha;
    }
    
    private function setCosturando(bool $estado): void {
        $this->costurando = $estado;
    }
 
    function costurar(){
        if(($this->getLinha() || $this->getLigado()) &&
            ($this->getLinha() && $this->getLigado()) ){
                $this->setCosturando(true);
                return "Á maquina {$this->getTipo()} está costurando";
            }
            return "Á maquina {$this->getTipo()} não pode costurar agora. Veja se ela está ligado e com linha!";
        
    }

    function pararDeCosturar(): void {
        if(!$this->getCosturando()){
            $this->costurando = false;
        }
    }
}