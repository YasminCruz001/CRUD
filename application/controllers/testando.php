<?php
/*
include "conexao_bd.php";
   class Testando extends CI_Controller {

      function index(){
      carrega a nossa view 
         $this->load->view('testando');
      }*/

      include "../application/models/sapato.php";
      
      $modelo = $_POST["modelo"];

      $sapato = new Sapato($modelo);

      if($sapato->cadastrarSapato())
   {
      echo "<h1>Sapato cadastrado!</h1>";
   }

   else
   {
       echo "<h1>Sapato não cadastrado!</h1>";
   }


   
   