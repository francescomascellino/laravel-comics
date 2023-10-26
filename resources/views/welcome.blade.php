@extends('layout.app')

@section('content')

<div class="container-fluid dc-mainContainer">

    <main class="row justify-content-center">

        {{-- CARDS CONTAINER --}}
        <div class="col-8 py-5">

            <div class="row row-cols-6 g-3">

                {{-- CARDS --}}
                @foreach ($comics as $comic)
    
                    <div class="col-2">

                        <div class="card bg-transparent">

                            <div class="p-1 dc-coverContainer" style="background-image: url({{$comic['thumb']}})">

                            </div>
        
                            <div class="card-body p-0 pt-3">
        
                                <p class="card-title text-uppercase">{{ $comic['series'] }}</p>
                                <p class="card-text text-capitalize">{{ $comic['type'] }}, price: {{ $comic['price'] }}</p>
        
                            </div>
        
                        </div>
                    
                    </div>

                @endforeach
                {{-- END CARDS --}}

                <div class="col-12 d-flex justify-content-center align-items-center">
                <a href="#" class="btn text-uppercase px-5 dc-more">load more</a>
                </div>

            </div>

        </div>
        {{-- END CARDS CONTAINER --}}

    </main>

</div>

@endsection