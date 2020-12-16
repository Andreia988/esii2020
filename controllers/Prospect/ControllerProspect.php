<?php

namespace controllers;

$separador - DIRECTORY_SEPARATOR;
$root - $_SERVER['DOCUMENT_ROOT'];

require_once($root.'../DAOProspect.php');

use DAO\DAOProspect;

/**
 * Esta classe serve para tratar as regras de negocios pertinentes à
 * classe Prospect
 * Seu escopo limita-se às funções da entidade Prospect 
 * @author Andreia Campos Ortiz
 */

 class ControllerProspec{
  /**
 * Recebe e trata os dados do prospect e envia para o DAO
 *  gravar no banco de dados
 * @param string $nome Nome do novo prospect
 * @param string $email Email do novo prospect
 * @param string $celular Celular do novo prospect
 * @param string $facebook Endereço do facebook do novo prospect
 * @param string $whatsapp Número do whatsapp do novo prospect
 * @return TRUE|Exception Retorna TRUE caso a inclusão tenha sido bem sucedida
 * ou uma Exception caso não tenha.
 */ 
public function SalvarProspect($nome,$email,$celular,$facebook,$whatsapp){
   $daoProspect= new DAOProspect();
   try{
      $daoProspect->incluirProspect($nome,$email,$celular,$facebook,$whatsapp);
   
   }catch(\Exception $e){
       throw new \Exception($e->getMessage());

   }  
}
   /**
    * Exclui um prospect previamente cadastrado do banco de dados
    * @param string $codProspect Código do Prospect que deve ser excluído
    * @return TRUE|Exception Retorna TRUE caso a exclusão tenha sido bem sucedida
    * ou uma Exception caso não tenha.
    */
    public function excluirProspect($codProspect){
      $daoProspect= new DAOProspect();
      try {
         $prospect = $daoProspect->excluirProspect($codProspect);
      } catch (\Exception $e) {
         throw new \Exception($e->getMessage());
      }
   }
    /**
    * Busca prospects do banco de dados
    * @param string $email Email do Prospect que deve ser retornado. Este parâmetro é opcional
    * @return Array[Prospect] Se informado email, retorna somente o prospect relacionado.
    * Senão, retornará todos os prospects do banco de dados
    */
    public function buscarProspects($email=null){
      $daoProspect= new DAOProspect();
      try {
         $prospect = $daoProspect->buscarProspects($email=null);
      } catch (\Exception $e) {
         throw new \Exception($e->getMessage());
      }
   /*Array que será retornado com um ou mais prospects*/
      $prospects = array();

   }
 }
 ?>