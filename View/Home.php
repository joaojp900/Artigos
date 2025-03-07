<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URL;?>/home">CRUD de Artigos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URL;?>/Create">Create</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav> 
<!--Final-Navbar-->
<!-- Seção clicável -->

      <?php             
          $not = new Usuario;
          $artigos = $not->VisualizarArtigo();
          foreach($artigos as $values) {
      ?>

<div class="container mt-5"> 
    <section class="p-4 bg-light border rounded" onclick="toggleArticles()" style="cursor: pointer;">
        <h4 class="mb-0">📖 Clique aqui para ver o artigo</h4>
    </section>

    <div class="article-content mt-3 d-none p-4 border rounded">
        <?php 
            echo "<h3>$values->titulo</h3>
                  <p>$values->descricao</p>
                  <p><strong>Contato do Autor:</strong> $values->contato</p>";
        ?>
        <button type="button" class="btn btn-primary"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="Detalhes/<?=$values->id?>">Mais Detalhes do Artigo</a></button>
        <button type="button" class="btn btn-danger"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="Delete/<?=$values->id?>">Excluir Artigo</a></button>
        <button type="button" class="btn btn-success"><a class="link-light link-offset-2 link-underline link-underline-opacity-0" href="Update/<?=$values->id?>">Atualizar Artigo</a></button>
    </div> 
    <?php
        }
    ?>
</div>

<script>
    function toggleArticles() {
        let articles = document.querySelectorAll(".article-content"); // Agora usa classe, não ID
        
        articles.forEach(article => {
            article.classList.toggle("d-none"); // Alterna a visibilidade de todos
        });
    }
</script>

     
    
</body>
</html>