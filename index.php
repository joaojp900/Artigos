<?php
include_once 'Controller/HomeController.php';
include_once 'Controller/UsuarioController.php';
 
define('URL', 'http://localhost/Artigos');

if(isset($_GET['url']))
{
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {
        //Rotas
        case 'home':
            $home = new HomeController;
            $home->AbrirHome();
           break;
        case 'Create':
            $create = new HomeController;
            $create->AbrirCreate();
           break;
        case 'Read':
            $read = new HomeController;
            $read->AbrirRead();
           break;
        case 'Update':
            $ups = new HomeController;
            $ups->AbrirUpdate($url[1]);
            break;      
           //Rotas CRUD
        case 'Cadastrar-Artigo':
            $cadastro = new UsuarioController;
            $cadastro->CadastrarArtigo();
           break;   
        case 'Read-Artigo':
            $read = new UsuarioController;
            $read->VisualizarArtigo();
           break;
        case 'Detalhes':
            $detalhes = new UsuarioController;
            $detalhes->DetalhesArtigo($url[1]);
           break;    
        case 'Atualizar':
            $Updates = new UsuarioController;
            $Updates->AtualizarArtigo();
          break;   
        case 'Delete':
            $delete = new UsuarioController;
            $delete->DeletarArtigo($url[1]);
            break;
              
    }
}