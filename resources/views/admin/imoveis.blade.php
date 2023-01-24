@extends('default.admin')

@section('admin_imports')
    <link rel="stylesheet" href="/css/admin/imoveis/imoveis.css">
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

    <section id="imoveis">
        <div class="container">
            <div class="filtro">
                <div class="row">
                    <div class="col-4 col-lg-3 form-group">
                        <label for="regiao" class="form-label">Região</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Todas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-3 form-group">
                        <label for="bairro" class="form-label">Bairro</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Todas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-3 form-group">
                        <label for="condominio" class="form-label">Condomínio</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Todos</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-3 form-group">
                        <label for="tipo_imovel" class="form-label">Tipo de imóvel</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Todos</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-2 form-group">
                        <label for="quartos" class="form-label">Quartos</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Qualquer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-2 form-group">
                        <label for="banheiros" class="form-label">Banheiros</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Qualquer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-2 form-group">
                        <label for="vagas_garagem" class="form-label">Vagas de garagem</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Qualquer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-3 form-group">
                        <label for="quartos" class="form-label">Características imóvel</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Qualquer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-3 form-group">
                        <label for="quartos" class="form-label">caracteristicas Condomínio</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Qualquer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-3 form-group">
                        <label for="destinacao" class="form-label">Destinação</label>
                        <select class="form-select form-select-lg mb-3">
                            <option selected>Todas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>                          
                    </div>
                    <div class="col-4 col-lg-3 form-group">
                        <label for="valor-min" class="form-label">Valor Mínimo</label>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text">De R$</span>
                            <input type="text" class="form-control" placeholder="0,00">
                        </div>                     
                    </div>
                    <div class="col-4 col-lg-3 form-group">
                        <label for="valor-max" class="form-label">Valor Máximo</label>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text">A R$</span>
                            <input type="text" class="form-control" placeholder="0,00">
                        </div>                     
                    </div>
                </div>
            </div>

            <div class="imoveis">
                
            </div>
        </div>
    </section>
@endsection
