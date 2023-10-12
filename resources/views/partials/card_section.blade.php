<div class="card_Session">
    <div class="image_Session">
        <img class="image_Session" src="{{('resources/')}}{{$session->path_img}}" alt="">
    </div>
    <div class="text_Session">
        <h2 class="text-title">{{$session->title}}</h2>
        <h2 class="text-subtitle"><span>Horário: </span>{{$session->time}}</h2>
        <h2 class="text-subtitle"><span>Ingresso: </span>R${{$session->price}}</h2>
        <h2 class="text-subtitle"><Span>Data: </Span> {{$session->date}}</h2>

    </div>
    <div class="button my-3 mx-4"><button class="btn btn-danger">Ingresso</button></div>
    <div class="button my-3 mx-4"><button class="btn btn-danger">Descrição</button></div>
</div>