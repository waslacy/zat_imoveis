@extends('default.admin')

@section('admin_imports')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/admin/imoveis/imoveis.css">
@endsection

@section('admin_content')
    <section id="imoveis">
        <div class="container">
            <div class="filtro">
                <form class="row" action="/admin/imoveis/filtro" method="POST">
                    @csrf
                    <div class="col-4 col-lg-3 form-group"><!--regiões-->
                        <label for="regiao" class="form-label">Região</label>
                        <select class="form-select form-select-lg mb-3" name="regiao">
                            <option selected>Todas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-3 form-group"><!--bairros-->
                        <label for="bairro" class="form-label">Bairro</label>
                        <select class="form-select form-select-lg mb-3" name="bairro">
                            <option selected>Todas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-3 form-group"><!--condominios-->
                        <label for="condominio" class="form-label">Condomínio</label>
                        <select class="form-select form-select-lg mb-3" name="condominio">
                            <option selected>Todos</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-3 form-group"><!--tipos-->
                        <label for="tipo_imovel" class="form-label">Tipo de imóvel</label>
                        <select class="form-select form-select-lg mb-3" name="tipo_imovel">
                            <option selected>Todos</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-2 form-group"><!--quartos-->
                        <label for="quartos" class="form-label">Quartos</label>
                        <select class="form-select form-select-lg mb-3" name="quartos">
                            <option selected>Qualquer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-2 form-group"><!--banheiros-->
                        <label for="banheiros" class="form-label">Banheiros</label>
                        <select class="form-select form-select-lg mb-3" name="banheiros">
                            <option selected>Qualquer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-2 form-group"><!--vagas-->
                        <label for="vagas_garagem" class="form-label">Vagas de garagem</label>
                        <select class="form-select form-select-lg mb-3" name="vagas_garagem">
                            <option selected>Qualquer</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-3 form-group"><!--caract. imoveis-->
                        <label for="quartos" class="form-label">Características imóvel</label>
                        <select class="caract_imovel form-select form-select-lg" name="caract_imovel"
                            multiple="multiple">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                            <option value="ds">Wyoming</option>
                            <option value="as">Wyoming</option>
                            <option value="fw">Wyoming</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-3 form-group"><!--caract. condominios-->
                        <label for="quartos" class="form-label">caracteristicas Condomínio</label>
                        <select class="caract_condominio form-select form-select-lg" name="caract_condominio"
                            multiple="multiple">
                            <option value="AL">Alabama</option>
                            <option value="WY">Wyoming</option>
                            <option value="ds">Wyoming</option>
                            <option value="as">Wyoming</option>
                            <option value="fw">Wyoming</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-3 form-group"><!--destinação-->
                        <label for="destinacao" class="form-label">Destinação</label>
                        <select class="form-select form-select-lg mb-3" name="destinacao">
                            <option selected>Todas</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-4 col-lg-3 form-group"><!--valor min-->
                        <label for="valor-min" class="form-label">Valor Mínimo</label>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text">De R$</span>
                            <input type="text" name="valor_min" class="form-control" placeholder="0,00">
                        </div>
                    </div>
                    <div class="col-4 col-lg-3 form-group"><!--valor max-->
                        <label for="valor-max" class="form-label">Valor Máximo</label>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text">A R$</span>
                            <input type="text" name="valor_max" class="form-control" placeholder="0,00">
                        </div>
                    </div>
                    <div class="col-4 col-lg-3 d-flex align-items-end">
                        <button class="btn-filtro mb-3">Filtrar</button>
                    </div>
                </form>
            </div>

            <div class="imoveis">
                <div class="mb-4 d-flex flex-row justify-content-between">
                        <h4>12 resultados</h4>
                        <a href="/admin/imoveis/novo" class="botao">Novo imóvel</a>
                </div>
                <div class="imovel row">
                    <div class="img col-lg-3">
                        <img src="/src/teste.jpg" alt="teste" width="100%">
                    </div>

                    <div class="content col-lg-9 row">
                        <div class="desc col-lg-8">
                            <span class="tipo_imovel">Apartamento</span>
                            <h3 class="title">Canto do Forte - Praia Grande - SP</h3>
                            <p class="endereco">
                                <i class="fa-solid fa-location-dot"></i>
                                Rua Santos, 330 - apto 63, Guarujá - SP
                            </p>
                            <div class="infos">
                                <div class="coluna1">
                                    <span class="area">65m²</span>
                                    <span class="quartos">1 Quarto</span>
                                    <span class="sutes">1 Suíte</span>
                                    <span class="banheiros">2 Banheiros</span>
                                </div>
                                <div class="coluna2">
                                    <span class="vagas">1 Vaga</span>
                                    <span class="iptu">R$ 100,00</span>
                                    <span class="condominio">R$ 100,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="valor col-lg-3">
                            <div class="venda">
                                <span class="destinacao">Venda</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação">
                                <span class="destinacao">Aluguel</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação_temporada">
                                <span class="destinacao">Aluguel Temporada</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                        </div>
                        <div class="acoes col-lg-1 d-flex flex-column justify-content-between">
                            <button class="alterar btn btn-success"><i class="fa-solid fa-caret-down"></i></button>
                            <button class="editar btn btn-warning"><i class="fa-solid fa-pen" style="color: #fff"></i></button>
                            <button class="deletar btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                <div class="imovel row">
                    <div class="img col-lg-3">
                        <img src="/src/teste.jpg" alt="teste" width="100%">
                    </div>

                    <div class="content col-lg-9 row">
                        <div class="desc col-lg-8">
                            <span class="tipo_imovel">Apartamento</span>
                            <h3 class="title">Canto do Forte - Praia Grande - SP</h3>
                            <p class="endereco">
                                <i class="fa-solid fa-location-dot"></i>
                                Rua Santos, 330 - apto 63, Guarujá - SP
                            </p>
                            <div class="infos">
                                <div class="coluna1">
                                    <span class="area">65m²</span>
                                    <span class="quartos">1 Quarto</span>
                                    <span class="sutes">1 Suíte</span>
                                    <span class="banheiros">2 Banheiros</span>
                                </div>
                                <div class="coluna2">
                                    <span class="vagas">1 Vaga</span>
                                    <span class="iptu">R$ 100,00</span>
                                    <span class="condominio">R$ 100,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="valor col-lg-3">
                            <div class="venda">
                                <span class="destinacao">Venda</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação">
                                <span class="destinacao">Aluguel</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação_temporada">
                                <span class="destinacao">Aluguel Temporada</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                        </div>
                        <div class="acoes col-lg-1 d-flex flex-column justify-content-between">
                            <button class="alterar btn btn-success"><i class="fa-solid fa-caret-down"></i></button>
                            <button class="editar btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                            <button class="deletar btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                <div class="imovel row">
                    <div class="img col-lg-3">
                        <img src="/src/teste.jpg" alt="teste" width="100%">
                    </div>

                    <div class="content col-lg-9 row">
                        <div class="desc col-lg-8">
                            <span class="tipo_imovel">Apartamento</span>
                            <h3 class="title">Canto do Forte - Praia Grande - SP</h3>
                            <p class="endereco">
                                <i class="fa-solid fa-location-dot"></i>
                                Rua Santos, 330 - apto 63, Guarujá - SP
                            </p>
                            <div class="infos">
                                <div class="coluna1">
                                    <span class="area">65m²</span>
                                    <span class="quartos">1 Quarto</span>
                                    <span class="sutes">1 Suíte</span>
                                    <span class="banheiros">2 Banheiros</span>
                                </div>
                                <div class="coluna2">
                                    <span class="vagas">1 Vaga</span>
                                    <span class="iptu">R$ 100,00</span>
                                    <span class="condominio">R$ 100,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="valor col-lg-3">
                            <div class="venda">
                                <span class="destinacao">Venda</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação">
                                <span class="destinacao">Aluguel</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação_temporada">
                                <span class="destinacao">Aluguel Temporada</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                        </div>
                        <div class="acoes col-lg-1 d-flex flex-column justify-content-between">
                            <button class="alterar btn btn-success"><i class="fa-solid fa-caret-down"></i></button>
                            <button class="editar btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                            <button class="deletar btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                <div class="imovel row">
                    <div class="img col-lg-3">
                        <img src="/src/teste.jpg" alt="teste" width="100%">
                    </div>

                    <div class="content col-lg-9 row">
                        <div class="desc col-lg-8">
                            <span class="tipo_imovel">Apartamento</span>
                            <h3 class="title">Canto do Forte - Praia Grande - SP</h3>
                            <p class="endereco">
                                <i class="fa-solid fa-location-dot"></i>
                                Rua Santos, 330 - apto 63, Guarujá - SP
                            </p>
                            <div class="infos">
                                <div class="coluna1">
                                    <span class="area">65m²</span>
                                    <span class="quartos">1 Quarto</span>
                                    <span class="sutes">1 Suíte</span>
                                    <span class="banheiros">2 Banheiros</span>
                                </div>
                                <div class="coluna2">
                                    <span class="vagas">1 Vaga</span>
                                    <span class="iptu">R$ 100,00</span>
                                    <span class="condominio">R$ 100,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="valor col-lg-3">
                            <div class="venda">
                                <span class="destinacao">Venda</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação">
                                <span class="destinacao">Aluguel</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação_temporada">
                                <span class="destinacao">Aluguel Temporada</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                        </div>
                        <div class="acoes col-lg-1 d-flex flex-column justify-content-between">
                            <button class="alterar btn btn-success"><i class="fa-solid fa-caret-down"></i></button>
                            <button class="editar btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                            <button class="deletar btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                <div class="imovel row">
                    <div class="img col-lg-3">
                        <img src="/src/teste.jpg" alt="teste" width="100%">
                    </div>

                    <div class="content col-lg-9 row">
                        <div class="desc col-lg-8">
                            <span class="tipo_imovel">Apartamento</span>
                            <h3 class="title">Canto do Forte - Praia Grande - SP</h3>
                            <p class="endereco">
                                <i class="fa-solid fa-location-dot"></i>
                                Rua Santos, 330 - apto 63, Guarujá - SP
                            </p>
                            <div class="infos">
                                <div class="coluna1">
                                    <span class="area">65m²</span>
                                    <span class="quartos">1 Quarto</span>
                                    <span class="sutes">1 Suíte</span>
                                    <span class="banheiros">2 Banheiros</span>
                                </div>
                                <div class="coluna2">
                                    <span class="vagas">1 Vaga</span>
                                    <span class="iptu">R$ 100,00</span>
                                    <span class="condominio">R$ 100,00</span>
                                </div>
                            </div>
                        </div>
                        <div class="valor col-lg-3">
                            <div class="venda">
                                <span class="destinacao">Venda</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação">
                                <span class="destinacao">Aluguel</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                            <div class="locação_temporada">
                                <span class="destinacao">Aluguel Temporada</span>
                                <h4 class="preco">R$ 385.000</h4>
                            </div>
                        </div>
                        <div class="acoes col-lg-1 d-flex flex-column justify-content-between">
                            <button class="alterar btn btn-success"><i class="fa-solid fa-caret-down"></i></button>
                            <button class="editar btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                            <button class="deletar btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('admin_imports_js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/js/ImoveisAdmin.js"></script>
@endsection
