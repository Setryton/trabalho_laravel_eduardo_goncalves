<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório de Clientes</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h2 class="mb-0">Relatório de Clientes</h2>
      </div>
      <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Idade</th>
              <th scope="col">Endereço</th>
              <th scope="col">Cidade</th>
              <th scope="col">Estado</th>
              <th scope="col">CEP</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach($clientes as $cliente)
            <tr>
              <td>{{ $cliente->nome }}</td>
              <td>{{ $cliente->email }}</td>
              <td>{{ $cliente->idade }}</td>
              <td>{{ $cliente->endereco }}</td>
              <td>{{ $cliente->cidade }}</td>
              <td>{{ $cliente->estado }}</td>
              <td>{{ $cliente->CEP }}</td>
            </tr>
            @endforeach

            <tr>
              <td>João Silva</td>
              <td>joao.silva@example.com</td>
              <td>30</td>
              <td>Rua Exemplo, 123</td>
              <td>São Paulo</td>
              <td>SP</td>
              <td>12345-678</td>
            </tr>
            <tr>
              <td>Maria Oliveira</td>
              <td>maria.oliveira@example.com</td>
              <td>25</td>
              <td>Avenida Exemplo, 456</td>
              <td>Rio de Janeiro</td>
              <td>RJ</td>
              <td>23456-789</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
