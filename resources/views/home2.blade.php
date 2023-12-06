@extends('layouts.main')

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
                    @auth
                        <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#erga">Catalog</a>
                    @else
                        <a class="btn btn-primary btn-xl rounded-pill mt-5" href="/login">Catalog</a>
                    @endauth
                </div>
            </div>
            {{-- <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div> --}}
        </header>

        @auth
            @foreach ($home as $ea)
                @if ($ea["id"] %2 === 1)
                    <section id="erga">
                        <div class="container px-5">
                            <div class="row gx-5 align-items-center">
                                <div class="col-lg-6 order-lg-2">
                                    @if (strlen($ea->gambar)>50)
                                        <div class="p-5">
                                            <a href="/catalog/{{ $ea["slug"] }}">
                                                <img class="img-fluid rounded-circle" src="{{ asset('storage/'.$ea->gambar) }}" alt="..." />
                                            </a>
                                        </div>
                                    @else
                                        <div class="p-5">
                                            <a href="/catalog/{{ $ea["slug"] }}">
                                                <img class="img-fluid rounded-circle" src="/img/{{ $ea["gambar"] }}"   alt="..." />
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-6 order-lg-1">
                                    <div class="text p-5">
                                        <h2 class="display-4">{{ $ea["Nama_kategori"] }}</h2>
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
                                            <a href="/catalog/{{ $ea["slug"] }}">
                                                <img class="img-fluid rounded-circle" src="{{ asset('storage/'.$ea->gambar) }}" alt="..." />
                                            </a>
                                        </div>
                                    @else
                                        <div class="p-5">
                                            <a href="/catalog/{{ $ea["slug"] }}">
                                                <img class="img-fluid rounded-circle" src="/img/{{ $ea["gambar"] }}"   alt="..." />
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="text p-5">
                                        <h2 class="display-4">{{ $ea["Nama_kategori"] }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach
        @else
            <section>
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5"><img class="img-fluid rounded-circle" src="/img/model5.jpg" alt="..." /></div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="text p-5">
                                <h2 class="display-4">Secondhand is a wise investment</h2>
                                <p>Appearance and dressing are important for gaining self-confidence and being attractive. People judge each other by first sight. A well-groomed individual gives a different first impression than an unkempt one.
                                    Our overall dressing is what others will see first when they meet. It is important to convey who we are through many means including our personal sense of style.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="p-5"><img class="img-fluid rounded-circle" src="/img/model3.jpg" alt="..." /></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text p-5">
                                <h2 class="display-4">You’ve added to our stock</h2>
                                <p>All our website items are hand selected for their quality and style. We only select the best vintage items, removing all torn or marked items from the system; any errors at all will be photographed and detailed in the description.
                                    We sell only authentic vintage pieces and original brands, no fakes ever.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5"><img class="img-fluid rounded-circle" src="/img/model4.jpg" alt="..." /></div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="text p-5">
                                <h2 class="display-4">Old is the new</h2>
                                <p>No need for expensive clothes or fancy brands.
                                    Looks and appearance aren't everything, but self-expression through fashion will certainly add some fun and sparkle to your life.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endauth


@endsection
