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

            <div class="row informações">
                <div class="col-12"><!--titulo section-->
                    <h2>informações</h2>
                    <hr>
                </div>
                <div class="col-12 col-lg-6 form-group"><!--titulo-->
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo">
                </div>
                <div class="col-6 col-lg-2 form-group"><!--ref-->
                    <label for="referencia" class="form-label">Referência</label>
                    <input type="text" class="form-control" name="referencia" id="referencia" disabled>
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
                <div class="col-8 form-group"><!--proprietario-->
                    <label for="proprietario" class="form-label">Proprietario</label>
                    <select class="proprietario form-select form-select-lg" name="proprietario" multiple="multiple">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="ds">Wyoming</option>
                        <option value="as">Wyoming</option>
                        <option value="fw">Wyoming</option>
                    </select>
                </div>
                <div class="col-4 d-flex align-items-end"><!--novo proprietario-->
                    <button class="novo-cliente">Novo Cliente</button>
                </div>
                <div class="col-12 mt-4">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea name="desccricao" id="descricao" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row caracteristicas_imovel mt-5">
                <div class="col-12"><!--titulo section-->
                    <h2>características do Imóvel</h2>
                    <hr>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('admin_imports_js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/js/ImoveisAdmin.js"></script>
@endsection
