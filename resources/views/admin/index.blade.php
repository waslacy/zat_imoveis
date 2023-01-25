@extends('default.admin')

@section('admin_imports')
    <link rel="stylesheet" href="/css/admin/home/home.css">
@endsection

@section('admin_content')
    <section id="home">
        <div class="container">
            <div class="row">
                <a class="botoes-paginas" href="/admin/imoveis">
                    <i class="fa-light fa-house mb-2"></i>
                    <h3>Imóveis</h3>
                </a>
                <a class="botoes-paginas" href="/admin/condominios">
                    <i class="fa-light fa-building mb-2"></i>
                    <h3>Condomínios</h3>
                </a>
                <a class="botoes-paginas" href="/admin/proprietarios">
                    <i class="fa-light fa-user mb-2"></i>
                    <h3>Proprietários</h3>
                </a>
                <a class="botoes-paginas" href="/admin/regioes">
                    <i class="fa-light fa-location-dot mb-2"></i>
                    <h3>Regiões</h3>
                </a>
            </div>
        </div>
    </section>
@endsection
