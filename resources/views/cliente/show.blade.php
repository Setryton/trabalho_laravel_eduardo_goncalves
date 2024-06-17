<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Cliente</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicial.home') }}">Confeitaria</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

  <div class="container mt-5">
    <h2 class="mb-4">Cadastro de Cliente</h2>
    <form>
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
      </div>
      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" id="endereco" placeholder="Digite seu endereço" required>
      </div>
      <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required>
      </div>
      <div class="form-group">
        <label for="estado">Estado</label>
        <select class="form-control" id="estado" required>
          <option>Selecione seu estado</option>
          <option>SP</option>
          <option>RJ</option>
          <option>MG</option>
          <option>ES</option>
          <!-- Adicione outros estados conforme necessário -->
        </select>
      </div>
      <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" placeholder="Digite seu CEP" required>
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
