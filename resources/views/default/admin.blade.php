<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zat Imóveis - Imobiliária</title>

    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    @yield('admin_imports')
</head>
<body>
    <nav class="navbar navbar-expand-lg py-3" id="navbar">
        <div class="container">
            <a href="/admin" class="navbar-brand">
                <img src="/src/imgs/logo-horizontal.webp" alt="Logo Zat Imóveis" width="250">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Abrir Menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bx bx-home-alt'></i>
                            <span>Imóveis</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/admin/imoveis">Ver Imóveis</a></li>
                            <li><a class="dropdown-item" href="/admin/imoveis/novo">Adicionar Imóvel</a></li>
                            <li><a class="dropdown-item" href="/admin/caracteristicas-imoveis">Características dos
                                    Imóveis</a></li>
                            <li><a class="dropdown-item" href="/admin/tipos_imoveis">Tipos de Imóveis</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bx bx-building'></i>
                            <span>Condomínios</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/admin/condominios">Ver Condomínios</a></li>
                            <li><a class="dropdown-item" href="/admin/condominios/novo">Adicionar Condomínio</a></li>
                            <li><a class="dropdown-item" href="/admin/caracteristicas-condominios">Características dos
                                    Condomínios</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/proprietarios">
                            <i class='bx bx-user'></i>
                            <span>Proprietários</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/regioes">
                            <i class='bx bx-map'></i>
                            <span>Regiões</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('admin_content')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    @yield('admin_imports_js')
</body>
</html>