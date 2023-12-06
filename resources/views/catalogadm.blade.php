@extends('layouts.mainadm')

@section('container')
            <!-- Header-->
            <header class="bg-dark py-5" style="margin-top: 65px">
                <div class="container px-4 px-lg-5 my-5"  style="background-color: #CDBBA7">
                    <div class="text-center text-white">
                        <h1 class="display-3 fw-bolder">{{ $catadm[0]->Nama_kategori }}</h1>
                        <p class="lead fw-normal text-white-70 mb-0">Add new catalog</p>
                    </div>
                </div>
            </header>
            <!-- Section-->
            <<section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    @foreach ($barang as $bar)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                @if (strlen($bar->Foto_barang)>50)
                                    <img src="{{ asset('storage/'.$bar->Foto_barang) }}" class="card-img-top" style="height: 300px" alt="">
                                @else
                                    <img class="card-img-top" src="/img/{{ $bar["Foto_barang"] }}" style="height: 300px"alt="..." />
                                @endif

                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">{{ $bar["Nama_barang"] }}</h5>
                                        <!-- Product price-->
                                        Rp.{{ $bar["Harga_barang"] }},00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="nav-item mb-3 d-md-flex justify-content-md-center">
                                    <form action="/cartdelete">
                                        <input type="hidden" name="id" value="{{ $bar->id }}">
                                        <input type="hidden" name="oldImage" value="{{ $bar->Foto_barang }}">
                                        <button type="submit" class="nav-link active btn btn-danger"
                                        onclick='return confirm("Are you sure to delete {{ $bar->Nama_barang }} product?")'>Delete</button>
                                    </form>

                                    <a type="submit" class="nav-link mx-2 active btn btn-warning" href="/updatecart/{{ $bar->slug }}">Update</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <div class="d-flex justify-content-center">
                {{ $barang->links() }}
            </div>

            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/addcatalog/{{ $catadm[0]->slug }}">Add new catalog</a></div>
            </div>


@endsection
