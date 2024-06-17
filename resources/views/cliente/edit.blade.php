<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Editar Cliente</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('cliente.update', ['id'=>$clientes->id]) }}" method="POST">
              @csrf
              @method('PUT')
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $clientes->nome }}" required>
                </div>
                <div class="mb-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" class="form-control" id="idade" name="idade" value="{{ $clientes->idade }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $clientes->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $clientes->cidade }}" required>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="cidade" name="endereco" value="{{ $clientes->endereco }}" required>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="cidade" name="estado" value="{{ $clientes->estado }}" required>
                </div>
                <div class="mb-3">
                    <label for="cidade" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cidade" name="CEP" value="{{ $clientes->CEP }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
