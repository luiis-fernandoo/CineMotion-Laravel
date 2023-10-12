@csrf()

@if(isset($sessionEdit))

<div class="form-group">
    <select name="film_id" id="" class="form-control" >
        @foreach($film as $films)
        <option value="{{ $films->id }}">{{$films->title}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <input type="time" name="time" class="form-control form-control-user" placeholder="Horário" value="{{ $sessionEdit->time}}">
</div>
<div class="form-group">
    <input type="date" name="date" class="form-control form-control-user" placeholder="Data da Sessão" value="{{ $sessionEdit->date}}">
</div>
<div class="form-group">
    <input type="number" name="room" class="form-control form-control-user" placeholder="Número da sala" value="{{ $sessionEdit->room}}">
</div>
<div class="form-group">
    <input type="number" name="num_session" class="form-control form-control-user" placeholder="Número da sessão" value="{{ $sessionEdit->num_session}}">
</div>
<div class="form-group">
    <input type="text" name="price" class="form-control form-control-user" placeholder="R$ 00,00" value="{{ $sessionEdit->price}}">
</div>


@else
<div class="form-group">
    <select name="film_id" id="" class="form-control">
        @foreach($film as $films)
        <option value="{{ $films->id }}">{{$films->title}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <input type="time" name="time" class="form-control form-control-user" placeholder="Horário">
</div>
<div class="form-group">
    <input type="date" name="date" class="form-control form-control-user" placeholder="Data da Sessão">
</div>
<div class="form-group">
    <input type="number" name="room" class="form-control form-control-user" placeholder="Número da sala">
</div>
<div class="form-group">
    <input type="number" name="num_session" class="form-control form-control-user" placeholder="Número da sessão">
</div>
<div class="form-group">
    <input type="text" name="price" class="form-control form-control-user" placeholder="R$ 00,00">
</div>
    @endif