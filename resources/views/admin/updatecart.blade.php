@extends('layouts.mainadm')
@section('container')
    <section class="" style="background-color:#CDBBA7;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <div class="container mt-5">
            <h1 class="text-center mb-5">Update Barang</h1>
            <a href="/catalogadmin/{{ $barang[0]->KategoriBarang->slug }}" class="btn btn-dark btn-lg mb-3">Data Product</a>
            <div class="card-body">
                <form action="/updatecart" method="POST" enctype="multipart/form-data">
                    @method("post")
                    @csrf

                    <div class="form-floating mb-3">
                      <input type="text" name="Nama_barang" class="form-control @error('Nama_barang') is-invalid @enderror" placeholder="Product's Name" id="Nama_barang" value="{{ old('Nama_barang', $barang[0]->Nama_barang) }}" required/>
                      <label for="Nama_barang">Product's Name</label>
                      @error('Nama_barang')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                  <div class="mb-3">
                      <fieldset>
                          <div class="mb-3">
                            <input type="hidden" name="slugcat" value="{{ $barang[0]->KategoriBarang->slug }}">
                          <label for="kategoriBarang_id" class="form-label">Category Product</label>
                          <select id="kategoriBarang_id" class="form-select" name="kategoriBarang_id">
                            <option value="{{ $barang[0]->KategoriBarang->id }}">{{ $barang[0]->KategoriBarang->Nama_kategori }}</option>
                          </select>
                          </div>
                      </fieldset>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="hidden" name="slugid" value="{{ $barang[0]->slug }}">
                      <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" id="slug" value="{{ old('slug', $barang[0]->slug) }}"/>
                      <label for="slug">Slug</label>
                      @error('slug')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="form-floating mb-3">
                      <input type="number" name="Jumlah_barang" class="form-control @error('Jumlah_barang') is-invalid @enderror" placeholder="Quantity" id="Jumlah_barang" value="{{ old('Jumlah_barang', $barang[0]->Jumlah_barang) }}" required/>
                      <label for="Jumlah_barang">Quantity</label>
                      @error('Jumlah_barang')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="form-floating mb-3">
                      <input type="number" name="Harga_barang" class="form-control @error('Harga_barang') is-invalid @enderror" placeholder="Price" id="Harga_barang" value="{{ old('Harga_barang', $barang[0]->Harga_barang) }}" required/>
                      <label for="Harga_barang">Price</label>
                      @error('Harga_barang')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="mb-3">
                          <label for="Foto_barang">Gambar</label>
                          <input type="hidden" name="oldImage" value="{{ $barang[0]->Foto_barang }}">

                          @if (strlen($barang[0]->Foto_barang)>50)
                              <img src="{{ asset('storage/'.$barang[0]->Foto_barang) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                          @else
                              <img src="/img/{{ $barang[0]->Foto_barang }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"/>
                          @endif

                          <input class="form-control btn-lg @error('Foto_barang') is-invalid @enderror" id="Foto_barang" type="file" name="Foto_barang" value="{{ old('Foto_barang') }}"
                          onchange="previewImage()"/>
                          @error('Foto_barang')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                    </div>

                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </form>
            </div>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
  const Nama_barang = document.querySelector('#Nama_barang')
  const slug = document.querySelector('#slug')

  Nama_barang.addEventListener('change', function(){
    fetch('/createslugbarang?Nama_barang=' + Nama_barang.value)
    .then(response => response.json())
    .then(data => slug.value =data.slug)
  });

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })

  function previewImage(){
      const Foto_barang = document.querySelector('#Foto_barang');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display='block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(Foto_barang.files[0]);

      oFReader.onload = function(oFREvent){
          imgPreview.src = oFREvent.target.result;
      }

  }
</script>
@endsection
