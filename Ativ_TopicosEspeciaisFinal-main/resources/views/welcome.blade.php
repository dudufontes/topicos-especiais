<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Final - Gerenciamento de Produtos</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
        }

        /* Efeito de fundo animado */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .navbar-custom {
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .container-main {
            background: rgba(255, 255, 255, 0.95);
            padding: 60px 50px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 90%;
            position: relative;
            backdrop-filter: blur(10px);
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #2d3748;
            margin-bottom: 15px;
            font-weight: 700;
            font-size: 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .lead {
            color: #4a5568;
            margin-bottom: 30px;
            font-weight: 400;
            font-size: 1.1rem;
        }

        .welcome-text {
            color: #718096;
            margin-bottom: 35px;
            font-size: 1rem;
        }

        .btn-custom {
            padding: 15px 35px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 12px;
            border: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.5s ease;
        }

        .btn-custom:hover::before {
            left: 100%;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-success-custom {
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
        }

        .btn-custom i {
            margin-right: 8px;
        }

        .icon-box {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }

        .icon-box i {
            font-size: 2.5rem;
            color: white;
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

        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .container-main {
                padding: 40px 30px;
            }

            h1 {
                font-size: 1.6rem;
            }

            .lead {
                font-size: 1rem;
            }

            .btn-custom {
                padding: 12px 28px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom position-fixed w-100 top-0">
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
                    @auth
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
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                <i class="fas fa-sign-in-alt me-1"></i>
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">
                                <i class="fas fa-user-plus me-1"></i>
                                Registrar
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-main mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="icon-box">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <h1>Trabalho Final - Tópicos Especiais I</h1>
                <p class="lead">Sistema de Gerenciamento de Produtos em Laravel</p>
                
                @auth
                    <p class="welcome-text">Bem-vindo ao sistema! Escolha uma opção abaixo:</p>
                    <div class="d-grid gap-3 mt-4">
                        <a href="/produtos" class="btn btn-custom btn-primary-custom">
                            <i class="fas fa-boxes"></i>
                            Gerenciar Produtos
                        </a>
                        <a href="/categorias" class="btn btn-custom btn-success-custom">
                            <i class="fas fa-tags"></i>
                            Gerenciar Categorias
                        </a>
                    </div>
                @else
                    <p class="welcome-text">Faça login ou registre-se para começar:</p>
                    <div class="d-grid gap-3 mt-4">
                        <a href="/login" class="btn btn-custom btn-primary-custom">
                            <i class="fas fa-sign-in-alt"></i>
                            Login
                        </a>
                        <a href="/register" class="btn btn-custom btn-success-custom">
                            <i class="fas fa-user-plus"></i>
                            Registrar
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
