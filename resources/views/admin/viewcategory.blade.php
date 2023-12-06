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

    <h1 class="text-center my-5">Data Kategori Barang</h1>
    @if($category->count())
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">Nama Kategori</th>
                {{-- <th scope="col" class="text-center">Jumlah Product</th> --}}
                <th scope="col" class="text-center">Dibuat Pada</th>
                <th scope="col" class="text-center">Diupdate pada</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $cat )
                <tr>
                    <td class="text-center">{{ $cat->Nama_kategori }}</td>
                    <td class="text-center">{{ $cat->created_at }}</td>
                    <td class="text-center">{{ $cat->updated_at }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block d-md-flex justify-content-md-center">
                            <a class="nav-link active btn btn-info" href="/catalogadmin/{{ $cat["slug"] }}">View</a>
                            <form action="/categorydelete">
                                <input type="hidden" name="id" value="{{ $cat->id }}">
                                <input type="hidden" name="oldImage" value="{{ $cat->gambar }}">
                                <button type="submit" class="nav-link active btn btn-danger"
                                onclick='return confirm("Are you sure to delete {{ $cat->Nama_kategori }}?")'>Delete</button>
                            </form>

                            <a class="nav-link active btn btn-warning" href="/viewupdatecategory/{{ $cat->slug }}">Update</a>

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
        <div class="text-center"><a class="btn btn-primary btn-lg mt-auto" href="/addcategory">Add new Kategori Barang</a></div>
    </div>
@endsection
