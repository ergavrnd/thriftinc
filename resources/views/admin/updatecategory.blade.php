@extends('layouts.mainadm')

@section('container')
    <section class="" style="background-color:#CDBBA7;">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <div class="container" style="margin-top: 110px">
            <h1 class="text-center mb-5">Update Kategori Barang</h1>
            <a href="/categoryadm" class="btn btn-dark btn-lg mb-3">Data Kategori Barang</a>
            <div class="card-body">
                <form action="/updatecategory" method="POST" enctype="multipart/form-data">
                    @method("post")
                    @csrf

                    <div class="form-floating mb-3">
                      <input type="text" name="Nama_kategori" class="form-control @error('Nama_kategori') is-invalid @enderror" placeholder="Nama Kategori" id="Nama_kategori" value="{{ old('Nama_kategori', $category[0]->Nama_kategori) }}" required/>
                      <label for="Nama_kategori">Nama Kategori</label>
                      @error('Nama_kategori')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="form-floating mb-3">
                      <input type="hidden" name="slugid" value="{{ $category[0]->slug }}">
                      <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" id="slug" value="{{ old('slug', $category[0]->slug) }}"/>
                      <label for="slug">Slug</label>
                      @error('slug')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gambar">Gambar</label>
                        <input type="hidden" name="oldImage" value="{{ $category[0]->gambar }}">

                        @if (strlen($category[0]->gambar)>50)
                            <img src="{{ asset('storage/'.$category[0]->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img src="/img/{{ $category[0]->gambar }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"/>
                        @endif

                        <input class="form-control btn-lg @error('gambar') is-invalid @enderror" id="gambar" type="file" name="gambar" value="{{ old('gambar') }}"
                        onchange="previewImage()"/>
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success btn-lg" style="margin-bottom: 150px">Submit</button>
                </form>
            </div>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
  const Nama_kategori = document.querySelector('#Nama_kategori')
  const slug = document.querySelector('#slug')

  Nama_kategori.addEventListener('change', function(){
    fetch('/createslugcategory?Nama_kategori=' + Nama_kategori.value)
    .then(response => response.json())
    .then(data => slug.value =data.slug)
  });

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })

  function previewImage(){
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display='block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>
@endsection
