<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    {{-- <header> --}}

        <div class="container m-auto">

            <div class="row justify-content-center">
    
                <div class="col-8 p-0">
    
                    <nav class="navbar navbar-expand-lg py-0">
    
                        <a class="navbar-brand flex-grow-1" href="#"><img src="{{Vite::asset('resources/img/dc-logo.png')}}"></a>
    
                        <div class="navbar-nav d-flex justify-content-between text-uppercase" v-for="(link, index) in navLinks">
    
                            <a class="nav-link px-4 py-5" href="link.path" @click="turnActive(index)"
                                class="(index == activeLink ? 'dc-active' : '')">
                                link.text</a>
    
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

    {{-- </header> --}}


    <main class="">

        @yield('content')

    </main>

    {{-- FOOTER --}}

    <div class="container">

        <div class="row flex-column justify-content-flex-end dc-footerCont">

            <footer class="p-0 ">

                <div class="d-flex justify-content-center dc-footerLinks">

                    <div class="col-8 pt-5 d-flex flex-column flex-wrap align-content-start dc-bigLogo">

                        <div class="col-2 dc-listContainer" v-for="(element) in footerLinks">

                            {{-- <h5 class="text-uppercase">{{ element.title }}</h5> --}}

                            <ol class="list-unstyled">
                                {{-- <li v-for="(link) in element.links" key="index" class="text-capitalize"><a
                                        :href="link.path">{{ link.text }}</a></li> --}}
                            </ol>

                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-center dc-contacts">

                    <div class="col-8 d-flex align-items-center justify-content-between">

                        <button class="btn text-uppercase dc-signUpBtn">sign-up now!</button>

                        <div class="d-flex align-items-center dc-followCont">

                            <h4 class="text-uppercase m-0">follow us</h4>

                            {{-- <a :href="link.path" class="ms-3" v-for="link in socialLinks"><img :src="getImageUrl(link.img)"
                                    :alt="link.name"></a> --}}

                        </div>

                    </div>

                </div>

            </footer>

        </div>

    </div>

    {{-- MENU --}}

    <div class="container dc-menuCont">

        <div class="row justify-content-center">

            <div class="col-8 p-0">

                <div class="d-flex align-items-center justify-content-evenly flex-wrap p-4 dcMenuEl">

                    {{-- <a :href="link.path" class="text-uppercase m-3" v-for="link in servicesLinks"><img
                            :src="getImageUrl(link.img)" alt=""><span class="ms-4">{{ link.text }}</span></a> --}}

                </div>

            </div>

        </div>

    </div>

</body>

</html>