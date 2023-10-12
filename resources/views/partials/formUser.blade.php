@if(Route::current()->getName() == 'create_user.Create_User')
@csrf()
<div class="form-group d-flex" style="justify-content: space-around;">
    <div class="form-group ">
        <input type="text" class="form-control form-control-user mx-auto" name="name" placeholder="Digite seu nome">
        <label class="label-register" for="name">Nome</label>
    </div>

    <div class="form-group">
        <input type="text" class="form-control form-control-user mx-auto" name="username" placeholder="Digite seu nome de usuário">
        <label class="label-register" for="username">Nome de Usuário</label>
    </div>

    <div class="form-group">
        <input type="text" class="form-control form-control-user mx-auto" name="phone" placeholder="Digite seu telefone">
        <label class="label-register" class="" for="date">Telefone</label>
    </div>

</div>

<div class="form-group d-flex" style="justify-content: space-around;">
    <div class="form-group">
        <input type="email" class="form-control form-control-user mx-auto" name="email" placeholder="Digite seu email">
        <label class="label-register" for="email">E-mail</label>
    </div>

    <div class="form-group">
        <input type="password" class="form-control form-control-user mx-auto" name="password" placeholder="Digite sua senha">
        <label class="label-register" for="exampleInputPassword1">Senha</label>
    </div>

    <div class="form-group">
        <input type="text" class="form-control form-control-user mx-auto" name="cpf" placeholder="Digite seu CPF">
        <label class="label-register" for="cpf">CPF</label>
    </div>


</div>

<div class="form-group d-flex" style="justify-content: space-around;">

    <div class="form-group">
        <input type="date" class="form-control form-control-user mx-auto" name="birth_date" placeholder="Digite sua data de nascimento">
        <label class="label-register" for="birth_date">Data de nascimento</label>
    </div>
    
</div>

@elseif(Route::current()->getName() == 'login.Login')
@csrf()
<div class="form-group">
    <input type="text" class="form-control form-control-user w-75 mx-auto" name="username" placeholder="Digite seu nome de usuário">
</div>

<div class="form-group">
    <input type="password" class="form-control form-control-user w-75 mx-auto " name="password" placeholder="Digite sua senha">
</div>
@endif