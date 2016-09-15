<?php


class Pessoa {
    
    
    private $nome;
   
    
   public static function  getInstance(){
       static $instance = null;
       
       if($instance == null){
           $instance = new Pessoa();
       }
       
       return $instance;
   }
   //para que nenhuma variavel instancie
   private function __construct() {
       
   }
   
   public function setNome($n){
       $this->nome = $n;
   }
   
    public function getNome(){
      return $this->nome;
   }
}
//rodando
$cara = Pessoa::getInstance();
$cara->setNome("Erivan");

echo "Nome ".$cara->getNome();

//$cara2 = Pessoa::getInstance();
//$cara2->setNome("Erivan cledson");


?>