<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Pedido</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h2 class="mb-0">Cadastro de Pedido</h2>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label for="cliente" class="form-label">Cliente</label>
            <select class="form-select" id="cliente" required>
              <option selected disabled>Selecione o cliente</option>
              <option value="1">Cliente 1</option>
              <option value="2">Cliente 2</option>
              <option value="3">Cliente 3</option>
              <!-- Adicione outros clientes conforme necessário -->
            </select>
          </div>
          <div class="mb-3">
            <label for="produto" class="form-label">Produto</label>
            <select class="form-select" id="produto" required>
              <option selected disabled>Selecione o produto</option>
              <option value="1">Produto 1</option>
              <option value="2">Produto 2</option>
              <option value="3">Produto 3</option>
              <!-- Adicione outros produtos conforme necessário -->
            </select>
          </div>
          <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" placeholder="Digite a quantidade" required>
          </div>
          <div class="mb-3">
            <label for="data" class="form-label">Data do Pedido</label>
            <input type="date" class="form-control" id="data" required>
          </div>
          <div class="mb-3">
            <label for="total" class="form-label">Total do Pedido</label>
            <div class="input-group">
              <span class="input-group-text">R$</span>
              <input type="number" step="0.01" class="form-control" id="total" placeholder="Digite o total do pedido" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar Pedido</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
