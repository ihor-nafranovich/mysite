<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
{{--                        <a class="navbar-brand" href="{{ route('home') }}">Навигация</a>--}}
{{--                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"--}}
{{--                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                            <span class="navbar-toggler-icon"></span>--}}
{{--                        </button>--}}
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Hello, {{ auth()->user()->name }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}">Выход</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="{{ route('register.create') }}">Регистрация</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="{{ route('login') }}">Login</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </nav>
{{--                <div class="col-9 social">--}}
{{--                    <a href="/assets/#"><span class="fa fa-twitter"></span></a>--}}
{{--                    <a href="/assets/#"><span class="fa fa-facebook"></span></a>--}}
{{--                    <a href="/assets/#"><span class="fa fa-instagram"></span></a>--}}
{{--                    <a href="/assets/#"><span class="fa fa-youtube-play"></span></a>--}}
{{--                </div>--}}

{{--                <div class="col-3 search-top">--}}
{{--                    <form action="{{route('article.search')}}" class="search-top-form" method="GET">--}}
{{--                        <span class="icon fa fa-search"></span>--}}
{{--                        <input type="text" name="query" placeholder="Поиск...">--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="/assets/#navbarMenu"
                    role="button" aria-expanded="false" aria-controls="navbarMenu"><span
                        class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="{{route('home')}}">Новости</a></h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">

            @include('blocks.menu')

        </div>
    </nav>
</header>
