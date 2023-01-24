@extends('default.admin')

@section('admin_imports')
    <link rel="stylesheet" href="css/login/style.css">
@endsection

@section('admin_content')
    <section id="login">
        <div class="card">
            <form action="/auth" method="POST" class="card-body d-flex flex-column justify-content-around">
                <h2 class="display-5 text-center">Login</h2>

                <div class="campos">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha">
                    </div>
                </div>

                <button class="button align-self-center" type="submit">Entrar</button>

                @if ($errors->any())
                    <div class="fieldsFail mt-3">
                        <ul>
                            @foreach ($errors->all() as $e)
                                <li class="text-danger">{{$e}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('danger'))
                    <div class="authFail mt-3">
                        <p class="text-danger text-center">{{session('danger')}}</p>
                    </div>
                @endif
            </form>
        </div>
    </section>
@endsection