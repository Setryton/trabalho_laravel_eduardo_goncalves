<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confeitaria</title>
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

    <!-- Home Section -->
    <section id="home" class="py-5 text-center bg-light">
        <div class="container">
            <h1 class="display-4">Bem-vindo a Confeitaria</h1>
            <p class="lead">Esta é a seção Home da nossa página com menu de navegação.</p>
        </div>
    </section>

    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Card de Clientes -->
            <div class="col-md-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">Clientes</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Gerencie seus clientes.</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" onclick="location.href='clientes/criar'">Criar</button>
                            <button class="btn btn-danger" onclick="location.href='clientes/apagar'">Apagar</button>
                            <button class="btn btn-warning" onclick="location.href='clientes/editar'">Editar</button>
                            <button class="btn btn-info" onclick="location.href='clientes/form'">Formulário</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card de Produtos -->
            <div class="col-md-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-success text-white">
                        <h2 class="mb-0">Produtos</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Gerencie seus produtos.</p>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" onclick="location.href='produtos/criar'">Criar</button>
                            <button class="btn btn-danger" onclick="location.href='produtos/apagar'">Apagar</button>
                            <button class="btn btn-warning" onclick="location.href='produtos/editar'">Editar</button>
                            <button class="btn btn-info" onclick="location.href='produtos/form'">Formulário</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sobre Section -->
    <section id="sobre" class="py-5 text-center bg-light">
        <div class="container">
            <h2>Sobre Nós</h2>
            <p class="lead">Esta é a seção Sobre da nossa página com menu de navegação.</p>
        </div>
    </section>

    <!-- Contato Section -->
    <section id="contato" class="py-5 text-center">
        <div class="container">
            <h2>Contato</h2>
            <p class="lead">Esta é a seção Contato da nossa página com menu de navegação.</p>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>