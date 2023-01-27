@extends('default.admin')

@section('admin_imports')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/admin/imoveis/novoImovel.css">
@endsection

@section('admin_content')
    <section id="novo_imovel">
        <form class="container">
            @csrf
            <h1 class="mb-5">
                @if (isset($imovel))
                    Editar Imóvel
                @else
                    Novo Imóvel
                @endif
            </h1>

            <div class="row informacoes zona">
                <div class="col-12"><!--titulo section-->
                    <h2>Informações</h2>
                    <hr>
                </div>
                <div class="col-12 col-lg-6 form-group"><!--titulo-->
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control form-control-lg" name="titulo" id="titulo">
                </div>
                <div class="col-6 col-lg-2 form-group"><!--ref-->
                    <label for="referencia" class="form-label">Referência</label>
                    <input type="text" class="form-control form-control-lg" name="referencia" id="referencia" disabled>
                </div>
                <div class="col-6 col-lg-2 form-group"><!--destaque-->
                    <label for="destaque" class="form-label">Destaque</label>
                    <select class="form-select form-select-lg mb-3" name="destaque">
                        <option selected>Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <div class="col-6 col-lg-2 form-group"><!--status-->
                    <label for="ativo" class="form-label">Status</label>
                    <select class="form-select form-select-lg mb-3" name="ativo">
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
                <div class="col-9 col-lg-3 form-group"><!--condominio-->
                    <label for="condominio" class="form-label">Condomínio</label>
                    <select class="proprietario form-select form-select-lg" name="condominio">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="ds">Wyoming</option>
                        <option value="as">Wyoming</option>
                        <option value="fw">Wyoming</option>
                    </select>
                </div>
                <div class="col-3 d-flex align-items-end"><!--novo condominio-->
                    <button class="novo-condominio">Novo Condomínio</button>
                </div>
                <div class="col-9 col-lg-3 form-group"><!--proprietario-->
                    <label for="proprietario" class="form-label">Proprietario</label>
                    <select class="proprietario form-select form-select-lg" name="proprietario" multiple="multiple">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="ds">Wyoming</option>
                        <option value="as">Wyoming</option>
                        <option value="fw">Wyoming</option>
                    </select>
                </div>
                <div class="col-3 d-flex align-items-end"><!--novo proprietario-->
                    <button class="novo-cliente">Novo Cliente</button>
                </div>
                <div class="col-12 mt-4">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea name="desccricao" id="descricao" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row caracteristicas_imovel zona mt-5">
                <div class="col-12"><!--titulo section-->
                    <h2>Características do Imóvel</h2>
                    <hr>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--tipo-->
                    <label for="tipo_imovel" class="form-label">Tipo de Imóvel</label>
                    <select class="form-select form-select-lg mb-3" name="tipo_imovel">
                        <option value="0">Casa</option>
                        <option value="1">Apartamento</option>
                    </select>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--area_util-->
                    <label for="area_util" class="form-label">Área Útil</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="area_util" class="form-control" >
                        <span class="input-group-text">m²</span>
                    </div>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--area_total-->
                    <label for="area_total" class="form-label">Área Total</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="area_total" class="form-control" >
                        <span class="input-group-text">m²</span>
                    </div>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--area_do terreno-->
                    <label for="area_terreno" class="form-label">Área do Terreno</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="area_terreno" class="form-control" >
                        <span class="input-group-text">m²</span>
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--ano construção-->
                    <label for="ano_construcao" class="form-label">Ano de Construção</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="number" name="ano_constrrucao" class="form-control" >
                    </div>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--salas-->
                    <label for="salas" class="form-label">Salas</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="number" name="salas" class="form-control" >
                    </div>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--quartos-->
                    <label for="quartos" class="form-label">Quartos</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="number" name="quartos" class="form-control" >
                    </div>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--suites-->
                    <label for="suites" class="form-label">Suítes</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="number" name="suites" class="form-control" >
                    </div>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--banheiros-->
                    <label for="banheiros" class="form-label">Banheiros</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="number" name="banheiros" class="form-control" >
                    </div>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--vagas garagem-->
                    <label for="vagas_garagem" class="form-label">Vagas de Garagem</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="number" name="vagas_garagem" class="form-control" >
                    </div>
                </div>
            </div>

            <div class="row endereco zona mt-5">
                <div class="col-12"><!--titulo section-->
                    <h2>Endereço</h2>
                    <hr>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--cep-->
                    <label for="cep" class="form-label">CEP</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="cep" class="form-control" >
                    </div>
                </div>
                <div class="col-12 col-lg-6 form-group"> <!--Rua-->
                    <label for="rua" class="form-label">Rua</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="rua" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-12 col-lg-1 form-group"> <!--número-->
                    <label for="numero" class="form-label">Número</label>
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="numero" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--complemento-->
                    <label for="complemento" class="form-label">Complemento</label> 
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="complemento" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-lg-2 form-group"> <!--bairro-->
                    <label for="bairro" class="form-label">Bairro</label> 
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="bairro" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--Região-->
                    <label for="regiao" class="form-label">Região</label>
                    <select class="proprietario form-select form-select-lg" name="regiao">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="ds">Wyoming</option>
                        <option value="as">Wyoming</option>
                        <option value="fw">Wyoming</option>
                    </select>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--Cidade-->
                    <label for="cidade" class="form-label">Cidade</label> 
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="cidade" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--estadp-->
                    <label for="estado" class="form-label">Estado</label> 
                    <div class="input-group input-group-lg mb-3">
                        <input type="text" name="estado" class="form-control" disabled>
                    </div>
                </div>
            </div>

            <div class="row valores zona mt-5">
                <div class="col-12"><!--titulo section-->
                    <h2>Preços</h2>
                    <hr>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--destinacao-->
                    <label for="destinacao" class="form-label">Destinação</label>
                    <select class="proprietario form-select form-select-lg" name="destinacao" multiple="multiple">
                        <option value="venda">Venda</option>
                        <option value="anual">Locação Anual</option>
                        <option value="temporada">Locação Temporada</option>
                    </select>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--iptu-->
                    <label for="iptu" class="form-label">Iptu</label>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" name="iptu" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--cond-->
                    <label for="condominio" class="form-label">Condomínio</label>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" name="condominio" class="form-control">
                    </div>
                </div>
                <div class="col-0 col-lg-3 form-group"> <!--espaço em branco-->
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--venda-->
                    <label for="preco_venda" class="form-label">Preço de Venda</label>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" name="preco_venda" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--venda promo-->
                    <label for="preco_venda_prmocional" class="form-label">Preço de Venda Promoção</label>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" name="preco_venda_prmocional" class="form-control">
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--anual-->
                    <label for="preco_anual" class="form-label">Preço Locação Anual</label>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" name="preco_anual" class="form-control">
                        <span class="input-group-text">/ mês</span>
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--anual promo-->
                    <label for="preco_anual_promocional" class="form-label">Preço Locação Anual Promoção</label>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" name="preco_anual_promocional" class="form-control">
                        <span class="input-group-text">/ mês</span>
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--temporada-->
                    <label for="preco_temporada" class="form-label">Preço Locação Temporada</label>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" name="preco_temporada" class="form-control">
                        <span class="input-group-text">/ diária</span>
                    </div>
                </div>
                <div class="col-12 col-lg-3 form-group"> <!--temporada promo-->
                    <label for="preco_temporada_promocional" class="form-label">Preço Locação Temporada Promoção</label>
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" name="preco_temporada_promocional" class="form-control">
                        <span class="input-group-text">/ diária</span>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('admin_imports_js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/js/ImoveisAdmin.js"></script>
@endsection
