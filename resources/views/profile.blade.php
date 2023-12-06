@extends('layouts.main')

@section('container')
<section class="" style="background-color: #CDBBA7;">
<div class="container">
  @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
  @endif

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" style="margin-top: 70px">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-20 gradient-custom text-center text-black"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">

              @if (auth()->user()->jenis_kelamin === null)
                <img src="/img/user.png" alt="Avatar" class="img-fluid my-5" style="width: 200px;">
              @else
                @if (auth()->user()->jenis_kelamin === 1)
                    @if (auth()->user()->image === null)
                        <img src="/img/songkang.jpg" alt="Avatar" class="img-fluid my-5" style="width: 200px;">
                    @else
                        <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="Avatar" class="img-fluid my-5" style="width: 200px;">
                    @endif
                @else
                    @if (auth()->user()->image === null)
                        <img src="/img/sohee.jpg" alt="Avatar" class="img-fluid my-5" style="width: 200px;">
                    @else
                        <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="Avatar" class="img-fluid my-5" style="width: 200px;">
                    @endif
                @endif
              @endif

              {{-- <img src="/img/sohee.jpg" alt="Avatar" class="img-fluid my-5" style="width: 200px;" /> --}}
              <h5>{{ auth()->user()->nama }}</h5>
              <p>
                @if (auth()->user()->role_id === 1)
                    Admin
                @else
                    Customer
                @endif
              </p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-15">
              <div class="card-body p-70">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">

                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Username</h6>
                    <p class="text-muted">{{ auth()->user()->username }}</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">

                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">{{ auth()->user()->email }}</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">{{ auth()->user()->notelp }}</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">

                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Address</h6>
                    <p class="text-muted">{{ auth()->user()->alamat }}</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">

                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Gender</h6>
                    <p class="text-muted">

                      @if (auth()->user()->jenis_kelamin !== null)
                          @if (auth()->user()->jenis_kelamin )
                            Male
                          @else
                            Female
                          @endif
                      @endif

                    </p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">

                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/editprofile">Edit Profile</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
