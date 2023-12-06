@extends('layouts.main')

@section('container')
<!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5"  style="background-color: #CDBBA7">
            <div class="text-center text-white">
                <h1 class="display-3 fw-bolder">Thriftinc</h1>
                <p class="lead fw-normal text-white-70 mb-0">For all your thrift needs</p>
            </div>
        </div>
    </header>
    <section class="vh-100" style="background-color: #CDBBA7;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-50">
        <div class="col">
            <p><span class="h2" style="color: white">Shopping Cart </span><span class="h4" style="color: white">(1 item in your cart)</span></p>

            <div class="card mb-4">
            <div class="card-body p-4" style="background-color: white">

                <div class="row align-items-center">
                <div class="col-md-2">
                    <input type="hidden" name="oldId" value="{{ $barang[0]->id }}">
                    <img src="/img/{{ $barang[0]->Foto_barang }}"
                    class="img-fluid" alt="Generic placeholder image">
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div>
                    <p class="small text-muted mb-4 pb-2">Name</p>
                    <p class="lead fw-normal mb-0">{{ $barang[0]->Nama_barang }}</p>
                    </div>
                </div>
                <!-- <div class="col-md-2 d-flex justify-content-center">
                    <div>
                    <p class="small text-muted mb-4 pb-2">Color</p>
                    <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2" style="color: #CDBBA7;"></i>
                        pink rose</p>
                    </div>
                </div> -->
                <div class="col-md-2 d-flex justify-content-center">
                    <div>
                    <p class="small text-muted mb-4 pb-2">Quantity</p>
                    <p class="lead fw-normal mb-0">{{ $barang[0]->Jumlah_barang }}</p>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div>
                    <p class="small text-muted mb-4 pb-2">Price</p>
                    <p class="lead fw-normal mb-0">Rp. {{ $barang[0]->Harga_barang }},00</p>
                    </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                    <div>
                    <p class="small text-muted mb-4 pb-2">Total</p>
                    <p class="lead fw-normal mb-0">Rp. {{ $barang[0]->Harga_barang }},00</p>
                    </div>
                </div>
                </div>

            </div>
            </div>

            <div class="card mb-5">
            <div class="card-body p-4">

                <div class="float-end">
                <p class="mb-0 me-5 d-flex align-items-center">
                    <span class="small text-muted me-2">Order total:</span> <span
                    class="lead fw-normal">Rp. {{ $barang[0]->Harga_barang }},00</span>
                </p>
                </div>

            </div>
            </div>

            <div class="d-flex justify-content-end" >
                <a type="button" class="btn btn-light btn-lg me-2" href="/catalog/{{ $barang[0]->KategoriBarang->slug }}">Continue shopping</a>
                <form action="/co" method="post">
                    @csrf
                    <input type="hidden" value="{{ $barang[0]->id }}" name="Barang_id">
                    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                    <input type="hidden" value="{{ $barang[0]->Harga_barang }}" name="totalHarga">
                <button type="submit" class="btn btn-primary btn-lg" style="background-color: #A27B5C">Add to cart</a>
                </form>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection
