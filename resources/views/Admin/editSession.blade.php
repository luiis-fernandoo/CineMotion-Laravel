@extends('Admin/base/baseForm')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.updateSession', $sessionEdit->id) }}" class="user" method="post">
    @method('put')
    @include('partials/formSection')
    <button class="btn btn-primary btn-user btn-block col-5 mx-auto" type="submit">Salvar Sessão</button>

</form>

@endsection