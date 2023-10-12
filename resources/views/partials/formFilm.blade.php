@csrf()

@if(isset($filmEdit))
<div class="form-group">
    <input type="text" class="form-control form-control-user" name="title" value="{{ $filmEdit->title}}" placeholder=" Título">
</div>
<div class="form-group">
    <input type="text" class="form-control form-control-user" name="gender" value="{{ $filmEdit->gender}}" placeholder=" Gênero">

</div>

<div class="form-group">
    <input type="time" class="form-control form-control-user" name="duration" value="{{ $filmEdit->duration}}" placeholder=" Duração">

</div>

<div class="form-group">
    <input type="text" class="form-control form-control-user" name="director" value="{{ $filmEdit->director}}" placeholder=" Diretor">

</div>

<div class="form-group">
    <input type="text" class="form-control form-control-user" name="description" value="{{ $filmEdit->description}}" placeholder=" Descrição">

</div>

<div class="form-group">
    <input type="date" class="form-control form-control-user" name="release_date" value="{{ $filmEdit->release_date}}" placeholder=" Data de Lançamento">

</div>

<div class="form-group">
    <input type="file" class="form-control form-control" accept="image/*" name="path_img" value="{{ $filmEdit->path_img}}" placeholder=" Imagem do Filme">

</div>

@else
<div class="form-group">
    <input type="text" class="form-control form-control-user" name="title" placeholder="Título">
</div>
<div class="form-group">
    <input type="text" class="form-control form-control-user" name="gender" placeholder="Gênero">

</div>

<div class="form-group">
    <input type="time" class="form-control form-control-user" name="duration" placeholder="Duração">

</div>

<div class="form-group">
    <input type="text" class="form-control form-control-user" name="director" placeholder="Diretor">

</div>

<div class="form-group">
    <input type="text" class="form-control form-control-user" name="description" placeholder="Descrição">

</div>

<div class="form-group">
    <input type="date" class="form-control form-control-user" name="release_date" placeholder="Data de Lançamento">

</div>

<div class="form-group">
    <input type="file" class="form-control form-control" accept="image/*" name="path_img" placeholder="Imagem do Filme">

</div>
@endif