@extends('layout.app')

@section('content')

<div class="container-fluid dc-mainContainer">

    <div class="row justify-content-center">

        {{-- CARDS CONTAINER --}}
        <div class="col-8 py-5 position-relative">

            <div class="row">
                <img src="{{$comic['thumb']}}" alt="">
                <h2 class="text-light">{{$comic['title']}}</h2>
            </div>

        </div>
        {{-- END CARDS CONTAINER --}}

    </div>

</div>

@endsection