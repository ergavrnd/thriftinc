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
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Add Your Catalog</a>
            </div>
        </div>
    </header>
    <!-- Content section 1-->

    @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    @endif
    <h1 class="text-center my-5">Data Jasa Kirim</h1>
    @if($jasa->count())
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">Nama Jasa Krim</th>
                <th scope="col" class="text-center">Harga</th>
                <th scope="col" class="text-center">Dibuat Pada</th>
                <th scope="col" class="text-center">Diupdate pada</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($jasa as $kirim )
                <tr>
                    <td class="text-center">{{ $kirim->Nama_jasa }}</td>
                    <td class="text-center">{{ $kirim->harga }}</td>
                    <td class="text-center">{{ $kirim->created_at }}</td>
                    <td class="text-center">{{ $kirim->updated_at }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block d-md-flex justify-content-md-center">
                            <form action="/jaskirdelete">
                                <input type="hidden" name="id" value="{{ $kirim->id }}">
                                <button type="submit" class="nav-link active btn btn-danger">Delete</button>
                            </form>

                            <a class="nav-link active btn btn-warning" href="/viewupdatejaskir/{{ $kirim->slug }}">Update</a>

                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center fs-2">Data Not Found</p>
        @for ($i=0; $i<=20; $i++)
            <p>                    .                    </p>
        @endfor
    </div>
    @endif
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-primary mt-auto" href="/addjasakirim">Add new Jasa Kirim</a></div>
    </div>
@endsection
