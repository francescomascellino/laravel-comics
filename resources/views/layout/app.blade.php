<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics{{ Route::currentRouteName() == 'welcome' ? ' - Welcome' : ''}}</title>

    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>

        <div class="container-fluid dc-additional-sites">

            <div class="row justify-content-center">
                <div class="col-8  d-flex justify-content-end align-items-center py-1 ">
                    <span class="px-5">DC POWER&trade;VISA&reg;</span>
                    <span>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></span> 
                </div> 
            </div>

        </div>

        <div class="container-fluid">

            <div class="row justify-content-center">
    
                <div class="col-8 p-0">

                    <nav class="navbar navbar-expand-lg py-0">
    
                        <a class="navbar-brand flex-grow-1" href="#"><img src="{{Vite::asset('resources/img/dc-logo.png')}}"></a>
    
                        <div class="navbar-nav d-flex justify-content-between text-uppercase"">
    
                            @foreach (config('navbar-links') as $link)

                                {{-- iN REALTA' COMICS NON SAREBBE LA HOME IN UN SITO COMPLETO, QUINDI IL LINK DOVREBBE ESSERE href="{{ route($link['path']) }}" --}}
                                <a class="nav-link px-4 py-5  {{ Route::currentRouteName() === $link['path'] ? 'dc-active' : ''}}" href="#">
                                {{$link['text']}}</a>

                            @endforeach
                            
                        </div>

                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <div class="d-flex">
                                <input type="search" class="form-control" placeholder="Search..." class="dc-search">
                                <i class="fa fa-search align-self-center"></i>
                            </div>
                        </div>
    
                    </nav>
    
                </div>
    
            </div>

            <div class="row">
    
                <div class="col-12 d-flex justify-content-center p-0 dc-jumbotron">
    
                    <div class="col-8 position position-relative">
    
                        <div class=" position-absolute top-100 translate-middle-y py-2 px-4 dc-currentSeries">
                            <h5 class="text-uppercase m-0">Current Series</h5>
                        </div>
    
                    </div>
    
                </div>
            </div>
    
        </div>

    </header>


    <main class="">

        @yield('content')

    </main>

        {{-- MENU --}}

        <div class="container-fluid dc-menuCont">

            <div class="row justify-content-center">
    
                <div class="col-8 p-0">
    
                    <div class="d-flex align-items-center justify-content-evenly flex-wrap p-4 dcMenuEl">

                        @foreach (config('services-links') as $link)
                            <a href="{{$link['path']}}" class="text-uppercase m-3" ><img
                                src="{{Vite::asset($link['img'])}}" alt=""><span class="ms-4">{{ $link['text'] }}</span></a>
                        @endforeach
    
                    </div>
    
                </div>
    
            </div>
    
        </div>

    {{-- FOOTER --}}

    <div class="container-fluid">

        <div class="row flex-column justify-content-flex-end dc-footerCont">

            <footer class="p-0 ">

                <div class="d-flex justify-content-center dc-footerLinks">

                    <div class="col-8 pt-5 d-flex flex-column flex-wrap align-content-start dc-bigLogo">

                        @foreach (config('footer-links') as $element)
                            <div class="col-2 dc-listContainer">

                                <h5 class="text-uppercase">{{ $element['title'] }}</h5>

                                <ol class="list-unstyled">

                                    @foreach ($element['links'] as $link)
                                        <li class="text-capitalize"><a href="{{$link['path']}}">{{$link['text']}}</a></li>
                                    @endforeach

                                </ol>

                            </div>

                        @endforeach

                    </div>

                </div>

                <div class="d-flex justify-content-center dc-contacts">

                    <div class="col-8 d-flex align-items-center justify-content-between">

                        <button class="btn text-uppercase dc-signUpBtn">sign-up now!</button>

                        <div class="d-flex align-items-center dc-followCont">

                            <h4 class="text-uppercase m-0">follow us</h4>

                            @foreach (config('social-links') as $link)
                            <a href="{{$link['path']}}" class="ms-3"><img src="{{Vite::asset($link['img'])}}" alt="{{$link['name']}}"></a>
                            @endforeach

                        </div>

                    </div>

                </div>

            </footer>

        </div>

    </div>


</body>

</html>