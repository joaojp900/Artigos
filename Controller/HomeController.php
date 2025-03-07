<?php
    
class HomeController
{

    public function AbrirHome(){
          include_once 'view/Home.php';
    }

    public function AbrirCreate(){
        include_once 'View/Create.php';
    }

    public function AbrirRead(){
       
    }

    public function AbrirUpdate($cod){
      $detalhes = new Usuario;
      $detalhes->id = $cod;
      $artigo = $detalhes->DetalhesArtigo($cod);
      include_once 'View/Update.php';
    }

}