<?php 

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome']."<br>");
        echo $pessoa->getNome();
        
        $pessoa->setTelefone($_POST['telefone']."<br>");
        echo $pessoa->getTelefone();

        $pessoa->setOrigem($_POST['origem']."<br>");
        echo $pessoa->getOrigem();

        $pessoa->setDatac($_POST['datac']."<br>");
        echo $pessoa->getDatac();

        $pessoa->setObs($_POST['obs']."<br>");
        echo $pessoa->getObs();
    }
}new Teste();

?>