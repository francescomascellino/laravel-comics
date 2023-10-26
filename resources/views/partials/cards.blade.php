@foreach ($comics as $id => $comic)
    
<div class="col-2">

    <div class="card bg-transparent">

        <div class="p-1 dc-coverContainer" style="background-image: url({{$comic['thumb']}})">

        </div>

        <div class="card-body p-0 pt-3">
            {{-- SI PUO' PASSARE UN VALORE NELLA ROUTE --}}
            <a href="{{ route('comic_details', $id) }}">LINK AL FUMETTO CON ID {{$id}}</a>

            <p class="card-title text-uppercase">{{ $comic['series'] }}</p>
            <p class="card-text text-capitalize">{{ $comic['type'] }}, price: {{ $comic['price'] }}</p>

        </div>

    </div>

</div>

@endforeach