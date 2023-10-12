@extends('Admin.base.base_admin')

@section('content')

<div class="container-image">

    <div id="dashboard-painel" class="container">
        <div class="d-block card w-100 shadow d-block ">
            <div class="card-header text-light fs-4 bg-primary gradient-bg">
                <div class="d-flex justify-content-between">
                    <a href="" class="text-light text-decoration-none">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-clipboard-user text-light me-3"></i>
                            <h2 class="mb-0">Filmes</h2>
                        </div>
                    </a>
                </div>
            </div>

            <div id="dashboard-body" class="card-body overflow-auto">
                <div class="d-block d-sm-flex justify-content-start ms-2 mx-3">
                    <a href="{{ route('admin.addFilm') }}">
                        <button id="addButton" class="me-4 btn btn-primary text-light fs-6 d-flex justify-content-around align-self-center" data-bs-toggle="modal" data-bs-target="#formAdd">
                            <i class=""> </i> <span> Adicionar Filme</span>
                        </button>
                    </a>
                </div>

                <div id="error-message" class="d-none">
                </div>

                <div id="dashboard-content" class="container mt-4">
                    <div class="row">
                        <div class="table-responsive responsive-y">
                            <table class="table table-bordered table-striped">
                                <thead class="tr-white">
                                    <th class="custom-header" scope="col">Nome Filme</th>
                                    <th class="custom-header" scope="col">Diretor</th>
                                    <th class="custom-header" scope="col">Gênero</th>
                                    <th class="custom-header" scope="col">Data de Lançamento</th>
                                    <th class="custom-header" scope="col">Duração</th>
                                    <th class="custom-header" colspan="2">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($film as $films)
                                    <tr>
                                        <td>{{ $films->title}}</td>
                                        <td>{{ $films->director}}</td>
                                        <td>{{ $films->gender}}</td>
                                        <td>{{ $films->release_date}}</td>
                                        <td>{{ $films->duration}}</td>
                                        <td>
                                            <a class="active-btn text-decoration-none" href="{{ route('admin.editFilm', $films->id) }}">
                                                <button class="me-1 btn btn-warning text-light fs-6 d-flex justify-content-around align-self-center" data-bs-toggle="modal" data-bs-target="">
                                                    <i class="bi bi-person-dash-fill" aria-hidden="true"></i> Editar
                                                </button>
                                            </a>
                                        </td>

                                        <td>
                                            <button type="button" onclick="deleteConfirmFilm(<?php echo $films->id ?>)" class="w-100 mt-1 btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#" data-bs-id="#" data-bs-number="#">
                                                <i class="bi bi-person-dash-fill" aria-hidden="true"></i> Deletar
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Sessões -->
    <div id="dashboard-painel" class="container mt-5">
        <div class="d-block card w-100 shadow d-block">
            <div class="card-header text-light fs-4 bg-black bg-primary">
                <div class="d-flex justify-content-between">
                    <a href="" class="text-black text-decoration-none">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-clipboard-user text-light me-3"></i>
                            <h2 class="mb-0 text-light">Sessões</h2>
                        </div>
                    </a>
                </div>
            </div>

            <div id="dashboard-body" class="card-body overflow-auto">
                <div class="d-block d-sm-flex justify-content-start ms-2 mx-3">
                    <a href="{{ route('admin.addSession') }}">
                        <button id="addButton" class="me-4 btn btn-primary text-light fs-6 d-flex justify-content-around align-self-center" data-bs-toggle="modal" data-bs-target="#formAdd">
                            <i class=""> </i> <span> Adicionar Sessão</span>
                        </button>
                    </a>
                </div>

                <div id="error-message" class="d-none">
                </div>

                <div id="dashboard-content" class="container mt-4">
                    <div class="row">
                        <div class="table-responsive responsive-y">
                            <table class="table table-bordered table-striped">
                                <thead class="tr-white">
                                    <th class="custom-header" scope="col">Filme Sessão</th>
                                    <th class="custom-header" scope="col">Data</th>
                                    <th class="custom-header" scope="col">Horário</th>
                                    <th class="custom-header" scope="col">Preço</th>
                                    <th class="custom-header" scope="col">Sala</th>
                                    <th class="custom-header" scope="col">Número Sessão</th>
                                    <th class="custom-header" colspan="2">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sessions as $session)
                                    <tr>
                                        <td>{{ $session->title}}</td>
                                        <td>{{ $session->date}}</td>
                                        <td>{{ $session->time}}</td>
                                        <td>{{ $session->price}}</td>
                                        <td>{{ $session->room}}</td>
                                        <td>{{ $session->num_session}}</td>
                                        <td>
                                            <a class="active-btn text-decoration-none" href="{{ route('admin.editSession',  $session->id)}}">
                                                <button class="me-1 btn btn-warning text-light fs-6 d-flex justify-content-around align-self-center" data-bs-toggle="modal" data-bs-target="">
                                                    <i class="bi bi-person-dash-fill" aria-hidden="true"></i> Editar
                                                </button>
                                            </a>
                                        </td>

                                        <td>
                                            <button onclick="deleteConfirmSession(<?php echo $session->id ?>)" type="button" class="w-100 mt-1 btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#" data-bs-id="#" data-bs-number="#">
                                                <i class="bi bi-person-dash-fill" aria-hidden="true"></i> Deletar
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function deleteConfirmSession(id) {
        var confirmation = confirm('Você deseja excluir essa Sessão?');
        if (confirmation) {
            alert("Sessão Apagada! ");
            window.location.href = "/admin/deleteSession/" + id;
        } else {
            alert("Cancelamento com sucesso! ")
        }

    }

    function deleteConfirmFilm(id) {
        var confirmation = confirm('Você deseja excluir esse Filme?');
        if (confirmation) {
            alert("Filme Apagado! ");
            window.location.href = "/admin/deleteFilm/" + id;
        } else {
            alert("Cancelamento com sucesso! ")
        }

    }
</script>


@endsection