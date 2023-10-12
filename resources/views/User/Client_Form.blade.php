@extends('Index.baseIndex')

@section('content')

<div class="login-container">
    <div class="register-card">
        @if (session('errors'))
        <div class="alert alert-danger">
            <ul>
                {{session('errors')}}
            </ul>
        </div>
        @endif
        <h2 class="text-title p-3 my-5" style="font-size: 40px;"><span style="color: white;">Cadas</span>tre-se</h2>
        <form action="{{ route('create_user.Save_Client') }}" method="post">
            @include('partials.formUser')

            <div>
                <button class="btn btn-danger" type="submit">Cadastrar</button>
            </div>

        </form>
    </div>
</div>

@endsection