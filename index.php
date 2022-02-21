<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>PHP Crud com ajax</title>
</head>
<body>

  

  <!-- Modal -->
  <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="form-group">
          <label for="completename">Nome</label>
          <input type="text" class="form-control" id="completename" aria-describedby="emailHelp" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
          <label for="completeemail">E-mail</label>
          <input type="email" class="form-control" id="completeemail" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
        </div>
        <div class="form-group">
          <label for="completephone">Telefone</label>
          <input type="phone" class="form-control" id="completephone" aria-describedby="emailHelp" placeholder="Digite seu telefone">
        </div>
        <div class="form-group">
          <label for="completeaddress">Endereço</label>
          <input type="text" class="form-control" id="completeaddress" aria-describedby="emailHelp" placeholder="Digite seu endereço">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-3">
    <h1 class="text-center">Tabela de usuários</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#completeModal">
      Adicionar usuário
    </button>
  </div>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>