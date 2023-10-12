@extends('Index.baseIndex')

@section('content')

        <div class="card_container">
            @foreach($sessions as $session)
                @include('partials/card_section')
            @endforeach
        </div>

              
@endsection