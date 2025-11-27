<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Gerenciamento</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
        }

        .navbar-text {
            font-weight: 500;
        }

        .btn-outline-light {
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: white;
            color: #667eea;
            transform: translateY(-2px);
        }

        .container {
            margin-top: 100px;
        }

        h1 {
            color: #2d3748;
            font-weight: 700;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
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

        .btn-edit {
            background: linear-gradient(135deg, #ffd700 0%, #ffa500 100%);
            color: #000;
            border: none;
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(255, 193, 7, 0.3);
        }

        .btn-edit:hover {
            background: linear-gradient(135deg, #ffa500 0%, #ff8c00 100%);
            color: #000;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
        }

        .btn-delete {
            background: linear-gradient(135deg, #fc8181 0%, #f56565 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(220, 53, 69, 0.3);
        }

        .btn-delete:hover {
            background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
        }

        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
        }

        .table {
            margin: 0;
        }

        .table thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

        .product-image {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .product-image:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .badge {
            padding: 8px 15px;
            border-radius: 8px;
            font-weight: 500;
        }

        .text-muted {
            color: #a0aec0 !important;
        }

        .form-text {
            color: #718096;
            font-size: 13px;
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
                <i class="fas fa-box-open me-2"></i>
                Gerenciamento de Produtos
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <span class="navbar-text me-3">
                            <i class="fas fa-user-circle me-1"></i>
                            Olá, {{ Auth::user()->name }}!
                        </span>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-outline-light btn-sm">
                                <i class="fas fa-sign-out-alt me-1"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1><i class="fas fa-boxes me-2"></i>Produtos</h1>

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
                <strong><i class="fas fa-exclamation-triangle me-2"></i>Erro na validação:</strong>
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
                    Cadastrar Novo Produto
                </h5>
            </div>
            <div class="card-body">
                <form method="POST" action="/produtos" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">
                            <i class="fas fa-tag me-1"></i>
                            Nome do Produto *
                        </label>
                        <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                               id="nome" name="nome" value="{{ old('nome') }}" 
                               placeholder="Digite o nome do produto" required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">
                            <i class="fas fa-align-left me-1"></i>
                            Descrição
                        </label>
                        <textarea class="form-control @error('descricao') is-invalid @enderror" 
                                  id="descricao" name="descricao" rows="3" 
                                  placeholder="Descrição opcional do produto">{{ old('descricao') }}</textarea>
                        @error('descricao')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">
                            <i class="fas fa-dollar-sign me-1"></i>
                            Preço (R$) *
                        </label>
                        <input type="number" step="0.01" class="form-control @error('preco') is-invalid @enderror" 
                               id="preco" name="preco" value="{{ old('preco') }}" 
                               placeholder="0.00" required>
                        @error('preco')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="imagem" class="form-label">
                            <i class="fas fa-image me-1"></i>
                            Imagem do Produto (PNG ou JPG)
                        </label>
                        <input type="file" class="form-control @error('imagem') is-invalid @enderror" 
                               id="imagem" name="imagem" accept="image/png,image/jpeg">
                        <small class="form-text text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            Máximo 2MB. Formatos aceitos: PNG, JPG
                        </small>
                        @error('imagem')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>
                            Cadastrar Produto
                        </button>
                        <a href="/" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>
                            Voltar
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Lista de Produtos -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="fas fa-list me-2"></i>
                    Lista de Produtos
                </h5>
            </div>
            <div class="card-body">
                @if($produtos->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><i class="fas fa-image me-1"></i> Imagem</th>
                                    <th><i class="fas fa-tag me-1"></i> Nome</th>
                                    <th><i class="fas fa-align-left me-1"></i> Descrição</th>
                                    <th><i class="fas fa-dollar-sign me-1"></i> Preço</th>
                                    <th><i class="fas fa-calendar me-1"></i> Data de Criação</th>
                                    <th><i class="fas fa-cog me-1"></i> Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produtos as $produto)
                                <tr>
                                    <td>
                                        @if($produto->imagem_path)
                                            <img src="{{ asset('storage/' . $produto->imagem_path) }}" 
                                                 alt="{{ $produto->nome }}" class="product-image">
                                        @else
                                            <span class="badge bg-secondary">
                                                <i class="fas fa-image-slash me-1"></i>
                                                Sem imagem
                                            </span>
                                        @endif
                                    </td>
                                    <td><strong>{{ $produto->nome }}</strong></td>
                                    <td>{{ $produto->descricao ?: 'Nenhuma descrição' }}</td>
                                    <td><strong>R$ {{ number_format($produto->preco, 2, ',', '.') }}</strong></td>
                                    <td>{{ $produto->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="/produtos/{{ $produto->id }}/edit" class="btn btn-sm btn-edit">
                                                <i class="fas fa-edit me-1"></i>
                                                Editar
                                            </a>
                                            <form action="/produtos/{{ $produto->id }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-delete" 
                                                        onclick="return confirm('Tem certeza que deseja deletar este produto?')">
                                                    <i class="fas fa-trash me-1"></i>
                                                    Deletar
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                        <p class="text-muted">Nenhum produto cadastrado ainda.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
