@extends('layouts.main')

@section('container')
        <!-- Header-->
        <section class="" style="background-color: #CDBBA7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2 " style="border-radius: 15px; margin-top: 65px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                    <h6 class="mb-0 text-muted">{{ $cart->count() }} items</h6>
                  </div>
                  @foreach ($cart as $item)
                  <div class="row mb-4 d-flex justify-content-between align-items-center">

                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img src="/img/{{ $item->Barang->Foto_barang }}"
                        class="img-fluid" alt="Generic placeholder image">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 offset-lg-1">
                      <h6 class="text-muted"></h6>
                      <h6 class="text-black mb-0">{{ $item->Barang->Nama_barang }}</h6>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h6 class="mb-0">Rp. {{ $item->Barang->Harga_barang }}</h6>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <form action="/codelete" method="post">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button type="submit" class="btn btn-danger">X</button>
                        </form>
                      </div>

                  </div>
                  <hr class="my-4">
                  @endforeach
                  <div class="pt-1">
                    <h6 class="mb-0"><a href="/" class="text-body"><i
                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">items {{ $cart->count() }}</h5>
                    <h5>Rp.<?php
                        $prize=0;
                        foreach ($cart as $item) {
                            $prize=$prize+$item->Barang->Harga_barang;
                        }
                        echo $prize;
                    ?></h5>
                  </div>

                  <h5 class="text-uppercase mb-3">Shipping</h5>

                  <div class="mb-4 pb-2">
                    <select class="select">
                        @foreach ($jasakirim as $jaskim )
                            <option value="{{ $jaskim->id }}" name="jas">{{ $jaskim->Nama_jasa }}- Rp.{{ $jaskim->harga }},00 </option>
                        @endforeach
                    </select>
                  </div>

                  <h5 class="text-uppercase mb-3">Payment</h5>
                  <div class="mb-4 pb-2">
                     <select class="select">
                        <option value="1">Transfer Bank </option>
                        <option value="1">BCA </option>
                        <option value="1">BNI </option>
                        <option value="1">MANDIRI </option>
                        <option value="1">BRI </option>

                    </select>
                </div>

                    </select>
                </div>

                  <div class="d-flex justify-content-between px-5" style="padding-top: 260px; padding-bottom: 1cm">
                      <div class="row gx-5 align-items-center">
                        <h5 class="text-uppercase">Total price</h5>
                        <h5>Rp.
                            <?php
                                $prize=0;
                                foreach ($cart as $item) {
                                    $prize=$prize+$item->Barang->Harga_barang;
                                }
                                echo $prize;
                            ?>
                        </h5>
                      </div>
                      <a type="button" class="btn btn-dark" href="/transcation">Confirm</a>

                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
