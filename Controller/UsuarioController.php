<?php

include_once 'Model/Usuario.php';

class UsuarioController
{

    public function CadastrarArtigo(){

        $artigo = new Usuario;
        $artigo->titulo = $_POST['titulo'];
        $artigo->descricao = $_POST['descricao'];
        $artigo->contato = $_POST['contato'];

     
        $artigo->CadastrarArtigo();

        echo "<body>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.all.js' integrity='sha512-HKvssviZjuAw/ZSnp0DC8SK7yYGxv9SslEBTe/+kNfe97fpmx7UTNQsj5JG9NOqYGz8M/vJSiosTvr3AAKT0cw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
        <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            color: 'green',
            title: 'Artigo gravado com sucesso!',
            showConfirmButton: true,
            timer: 2000
          }).then((result) => {
           window.location='".URL."/home';
          })
            </script>
            </body>
            ";
    
    }

    public function VisualizarArtigo(){

         $artigo = new Usuario;
         $dadosArtigo = $artigo->VisualizarArtigo();
          
    }

    public function DetalhesArtigo($cod){
      $detalhes = new Usuario;
      $detalhes->id = $cod;
      $detalhes->DetalhesArtigo($cod);
      include_once 'View/Read.php';
    }

    public function AtualizarArtigo(){

      $artigos = new Usuario;
      $artigos->id = $_POST['id'];
      $artigos->titulo = $_POST['titulo'];
      $artigos->descricao = $_POST['descricao'];
      $artigos->contato = $_POST['contato'];
      $artigos->AtualizarArtigo();
     

         echo "<body>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.all.js' integrity='sha512-HKvssviZjuAw/ZSnp0DC8SK7yYGxv9SslEBTe/+kNfe97fpmx7UTNQsj5JG9NOqYGz8M/vJSiosTvr3AAKT0cw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
        <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            color: 'green',
            title: 'Artigo Atualizado com sucesso!',
            showConfirmButton: true,
            timer: 2000
          }).then((result) => {
           window.location='".URL."/home';
          })
            </script>
            </body>
            ";
             
    
    }

    public function DeletarArtigo($cod){
            $delete = new Usuario;
            $delete->id = $cod;
            $delete->DeletarArtigo($cod);
            header("Location:".URL."/home");
    }





}