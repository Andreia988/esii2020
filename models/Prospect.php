<?php
namespace models;
/**
 * Classe Model de Usuário
 * @author Andreia Campos Ortiz
 */
class Prospect{


    /**
    * Código do Prospect
    * @var int
    */
    public $codigo;
    /**
    * Nome do prospect
    * @var string
    */
    public $nome;
    /**
    * E-mail do prospect
    * @var string
    */
    public $email;
    /**
    * Celular do prospect
    * @var string
    */
    public $celular;
    /**
    * facebook do prospect
    * @var string
    */
    public $facebook;
    /**
    * whatsapp do prospect
    * @var string
    */
    public $whatsapp;
    
    /**
    * Carrega os atributos da classe prospect
    * @param string $codigo Código do Prospect
    * @param string $nome Nome do Prospect
    * @param string $email E-mail do Prospect
    * @param string $celular Celular do Prospect
    * @param string $facebook Facebook do Prospect
    * @param string $whatsapp Whatsapp do Prospect
    * @return void
    */
     public function addProspect($codigo,$nome,$email,$celular,$facebook,$whatsapp){
     $this->codigo = $codigo;
     $this->nome = $nome;
     $this->email = $email;
     $this->celular = $celular;
     $this->facebook = $facebook;
     $this->whatsapp = $whatsapp;
   
    }


}
?>