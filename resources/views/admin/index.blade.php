@extends('default.admin')

@section('admin_imports')
    <link rel="stylesheet" href="/css/admin/home/home.css">
@endsection

@section('admin_content')
    <nav class="navbar navbar-expand-lg py-3" id="navbar">
        <div class="container">
            <a href="/admin" class="navbar-brand"><img src="#" alt="Logo Zat Imóveis" style="color: #fff"></a>

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
                            <li><a class="dropdown-item" href="/admin/imoveis/novo">Adicionar Imóveis</a></li>
                            <li><a class="dropdown-item" href="/admin/caracteristicas-imoveis">Características dos Imóveis</a></li>
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
                            <li><a class="dropdown-item" href="/admin/condominios/novo">Adicionar Condomínios</a></li>
                            <li><a class="dropdown-item" href="/admin/caracteristicas-condominios">Características dos Condomínios</a></li>
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

    <section id="home">
        <div class="container">
            <div class="row">
                <a class="botoes-paginas" href="/admin/imoveis">
                    <i class='bx bx-home-alt'></i>
                    <h3>Imóveis</h3>
                </a>
                <a class="botoes-paginas" href="/admin/condominios">
                    <i class='bx bx-building'></i>
                    <h3>Condomínios</h3>
                </a>
                <a class="botoes-paginas" href="/admin/proprietarios">
                    <i class='bx bx-user'></i>
                    <h3>Proprietários</h3>
                </a>
                <a class="botoes-paginas" href="/admin/regioes">
                    <i class='bx bx-map'></i>
                    <h3>Regiões</h3>
                </a>
            </div>
        </div>
    </section>
@endsection
