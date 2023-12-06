@extends('layouts.main')

@section('container')
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Thriftinc</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/signup">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead" style="padding: 0;">
            <!-- <img src="img/img.jpeg" alt="..."> -->
            <div class="masthead-content">
                <div class="container px-5">

                    <!-- <img src="/img/img.jpeg" style="width:2000px;height:1500px;"> -->
                    <h1 class="masthead-heading mb-0 text-light">The thrift lovers’ thrift stores</h1>
                    <h2 class="masthead-subheading mb-0 text-light">For all your thrift needs</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
                </div>
            </div>
            <!-- <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div> -->
        </header>
        <!-- Content section 1-->

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

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white big">THRIFTINC</p></div>
        </footer>
@endsection
