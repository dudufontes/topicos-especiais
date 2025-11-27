<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Gerenciamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding-bottom: 50px;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
        }

        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            transform: translateY(-2px);
        }

        .container {
            margin-top: 100px;
        }

        h1 {
            color: #2d3748;
            font-weight: 700;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cookie-info {
            background: linear-gradient(135deg, #bee3f8 0%, #90cdf4 100%);
            color: #2c5282;
            padding: 18px 25px;
            margin-bottom: 25px;
            border-radius: 12px;
            border-left: 4px solid #3182ce;
            box-shadow: 0 4px 15px rgba(49, 130, 206, 0.2);
            font-weight: 500;
        }

        .cookie-info strong {
            font-weight: 700;
        }

        .alert {
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            font-weight: 500;
        }

        .alert-success {
            background: linear-gradient(135deg, #d4fc79 0%, #96e6a1 100%);
            color: #2f855a;
        }

        .error-box {
            background: linear-gradient(135deg, #fed7d7 0%, #feb2b2 100%);
            color: #742a2a;
            padding: 15px 20px;
            margin-bottom: 25px;
            border-radius: 12px;
            border-left: 4px solid #fc8181;
            box-shadow: 0 4px 15px rgba(252, 129, 129, 0.2);
        }

        .error-box ul {
            margin: 0;
            padding-left: 20px;
        }

        .error-box li {
            margin: 5px 0;
            font-size: 14px;
            font-weight: 500;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            background: white;
        }

        .card-header {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
            padding: 20px 25px;
            border: none;
        }

        .card-header h5 {
            margin: 0;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .card-body {
            padding: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-control,
        .form-select {
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            font-size: 14px;
            background: #f7fafc;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #48bb78;
            box-shadow: 0 0 0 4px rgba(72, 187, 120, 0.1);
            background: white;
        }

        .form-control.is-invalid {
            border-color: #fc8181;
        }

        .invalid-feedback {
            font-size: 13px;
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(72, 187, 120, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(72, 187, 120, 0.4);
        }

        .btn-secondary {
            background: #718096;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: #4a5568;
            transform: translateY(-3px);
        }

        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }

        .table {
            margin: 0;
        }

        .table thead {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
        }

        .table thead th {
            border: none;
            padding: 15px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: #f7fafc;
            transform: scale(1.01);
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
            border-bottom: 1px solid #e2e8f0;
        }

        .text-muted {
            color: #a0aec0 !important;
        }

        @media (max-width: 768px) {
            .container {
                margin-top: 80px;
            }

            .card-body {
                padding: 20px;
            }

            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <i class="fas fa-tags me-2"></i>
                Gerenciamento de Categorias
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/produtos">
                            <i class="fas fa-boxes me-1"></i>
                            Produtos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-home me-1"></i>
                            Início
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>
            <i class="fas fa-tags me-2"></i>
            Categorias
        </h1>

        <!-- Informação do Cookie -->
        @if(request()->cookie('ultima_categoria_acessada'))
            <div class="cookie-info">
                <i class="fas fa-cookie-bite me-2"></i>
                <strong>Informação do Cookie:</strong>  
                Última vez que você acessou esta página: <strong>{{ request()->cookie('ultima_categoria_acessada') }}</strong>
            </div>
        @endif

        <!-- Mensagem de Sucesso -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Mensagens de Erro de Validação -->
        @if ($errors->any())
            <div class="error-box">
                <strong>
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Erro na validação:
                </strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário de Cadastro -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-plus-circle me-2"></i>
                    Cadastrar Nova Categoria
                </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="/categorias">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">
                            <i class="fas fa-tag me-1"></i>
                            Nome da Categoria *
                        </label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                               id="nome" name="nome" value="{{ old('nome') }}" 
                               placeholder="Digite o nome da categoria" required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>
                            Cadastrar Categoria
                        </button>
                        <a href="/" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>
                            Voltar
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Lista de Categorias -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-list me-2"></i>
                    Lista de Categorias
                </h5>
            </div>
            <div class="card-body">
                @if($categorias->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><i class="fas fa-hashtag me-1"></i> ID</th>
                                    <th><i class="fas fa-tag me-1"></i> Nome</th>
                                    <th><i class="fas fa-calendar me-1"></i> Data de Criação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categorias as $categoria)
                                <tr>
                                    <td><strong>{{ $categoria->id }}</strong></td>
                                    <td>{{ $categoria->nome }}</td>
                                    <td>{{ $categoria->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                        <p class="text-muted">Nenhuma categoria cadastrada ainda.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
