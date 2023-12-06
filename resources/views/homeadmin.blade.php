@extends('layouts.mainadm')

@section('container')
    <body id="page-top">
        <!-- Header-->
        <header class="masthead" style="padding: 0;">
            <!-- <img src="img/img.jpeg" alt="..."> -->
            <div class="masthead-content">
                <div class="container px-5">

                    <!-- <img src="/img/img.jpeg" style="width:2000px;height:1500px;"> -->
                    <h1 class="masthead-heading mb-0 text-light">THRIFTINC</h1>
                    <h2 class="masthead-subheading mb-0 text-light">Welcome thrift buddies!</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#erga">Add Your Catalog</a>
                </div>
            </div>
            <!-- <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div> -->
        </header>
        <!-- Content section 1-->

        @foreach ($admin as $ea)
            @if ($loop->iteration %2 === 1)
                <section id="erga">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                @if (strlen($ea->gambar)>50)
                                    <div class="p-5">
                                        <a href="/catalogadmin/{{ $ea["slug"] }}">
                                            <img class="img-fluid rounded-circle" src="{{ asset('storage/'.$ea->gambar) }}" alt="..." />
                                        </a>
                                    </div>
                                @else
                                    <div class="p-5">
                                        <a href="/catalogadmin/{{ $ea["slug"] }}">
                                            <img class="img-fluid rounded-circle" src="/img/{{ $ea["gambar"] }}"   alt="..." />
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="text p-5">
                                    <h2 class="display-4">Add {{ $ea["Nama_kategori"] }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @else
                <section>
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                @if (strlen($ea->gambar)>50)
                                    <div class="p-5">
                                        <a href="/catalogadmin/{{ $ea["slug"] }}">
                                            <img class="img-fluid rounded-circle" src="{{ asset('storage/'.$ea->gambar) }}" alt="..." />
                                        </a>
                                    </div>
                                @else
                                    <div class="p-5">
                                        <a href="/catalogadmin/{{ $ea["slug"] }}">
                                            <img class="img-fluid rounded-circle" src="/img/{{ $ea["gambar"] }}"   alt="..." />
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <div class="text p-5">
                                    <h2 class="display-4">Add {{ $ea["Nama_kategori"] }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach

        <div class="card-footer mb-4 p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-primary btn-lg mt-auto" href="/categoryadm">View detail Category</a></div>
        </div>


@endsection
