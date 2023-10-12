@extends('Index.baseIndex')

@section('content')

<div class="login-container">
    <div class="login-card">
        @if (session('errors'))
        <div class="alert alert-danger">
            <ul>
                {{session('errors')}}
            </ul>
        </div>
        @endif
        <h2 class="text-title p-3 my-4" style="font-size: 40px;"><span style="color: white;">Fazer </span>Login</h2>
        <form class="user" action="{{route('login.Authentication')}}" method="post">
            @include('partials/formUser')

            <div class="my-3">
                <a class="" style="text-decoration: none; color: white;" href="">Esqueceu sua senha?</a>
            </div>
            <div class="my-3">
                <a class="" style="text-decoration: none; color: white;" href="{{ route('create_user.Create_User')}}">Cadastre-se</a>
            </div>

            <button class="btn btn-danger" type="submit">Fazer Login</button>
        </form>



    </div>
</div>

@endsection