<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Artigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
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

    <div class="container mt-5">
        <h2 class="mb-4">Publicar Artigo</h2>
        <form action="<?php echo URL;?>/Cadastrar-Artigo" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título do Artigo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o título" required >
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">E-mail de contato do Autor</label>
                <input type="text" class="form-control" id="contato" name="contato" placeholder="Contato  do autor" required>
            </div>
            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="5" placeholder="Digite o conteúdo do artigo" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Publicar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
