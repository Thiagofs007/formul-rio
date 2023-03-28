<?php 

class Pessoa{
    private $nome;
    private $telefone;
    private $origem;
    private $datac;
    private $obs;
    private $estado;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getOrigem(){
        return $this->origem;
    }
    public function setOrigem($origem){
        $this->origem = $origem;
    }

    public function getDatac(){
        return $this->datac;
    }
    public function setDatac($datac){
        $this->datac = $datac;
    }

    public function getObs(){
        return $this->obs;
    }
    public function setObs($obs){
        $this->obs = $obs;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
}

?>