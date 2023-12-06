<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thriftinc</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="{{ asset('img.jpeg') }}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet" />
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i') }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="/">Thriftinc</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        @can('admin')
                            <li class="nav-item"><a class="nav-link" href="/homeadmin">My Dashboard</a></li>
                        @endcan
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        @auth
                            <li class="nav-item"><a class="nav-link" href="/historycus">History</a></li>
                            <li class="nav-item"><a class="nav-link" href="/transcation">Transaction</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="/login">History</a></li>
                            <li class="nav-item"><a class="nav-link" href="/login">Transaction</a></li>
                        @endauth
                        <li class="nav-item"><a href="/co"><img class="img-fluid me-3"  src="/img/bag2.png" style="height: 40px"></a></li>

                        @auth
                            <li>
                                <div class="nav-item dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      {{ auth()->user()->username }}
                                    </button>
                                    <ul class="dropdown-menu rounded-0 rounded-bottom m-0">
                                        <li><a class="nav-link text-center" style="color: black" href="/profile">Profile</a></li>
                                        <li class="text-center">
                                            <form action="/logout">
                                            @csrf
                                                <button class="dropdown-item" type="submit">Logout</button>
                                            </form>
                                        </li>
                                    </ul>
                                  </div>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="/signup">Sign Up</a></li>
                            <li class="nav-item"><a class="nav-link" href="/login">Log In</a></li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    <div class="erga">
        @yield('container')
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-black">
        <div class="container px-5"><p class="m-0 text-center text-white big">THRIFTINC</p></div>
    </footer>
            <!-- Bootstrap core JS-->
            <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"></script>
            <!-- Core theme JS-->
            <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
