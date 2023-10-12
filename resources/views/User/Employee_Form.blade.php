<h1>Cadastre Funcionário</h1>

<form action="{{ route('create_employee.Save_Employee') }}" method="post">
    @include('partials.formUser')
    <input type="number" name="salary" placeholder="Digite o salário do funcionário">
    <input type="text" name="function" placeholder="Digite o cargo do funcionário">
    <input type="text" name="address" placeholder="Digite o endereço">

    <button type="submit">Cadastrar</button>
</form>