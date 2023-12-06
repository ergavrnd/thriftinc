@extends('layouts.mainadm')

@section('container')
  <section class="vh-100" style="background-color:#CDBBA7;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <div class="container mt-5">
            <h1 class="text-center mb-5">Add new Jasa Kirim</h1>
            <a href="/jasakirim" class="btn btn-dark btn-lg mb-3">Data Jasa Kirim</a>
            <div class="card-body">
                <form action="/submitjasakirim" method="POST" enctype="multipart/form-data">
                    @method("post")
                    @csrf
                    
                    <div class="form-floating mb-3">
                      <input type="text" name="Nama_jasa" class="form-control @error('Nama_jasa') is-invalid @enderror" placeholder="Nama Kategori" id="Nama_jasa" value="{{ old('Nama_jasa') }}" required/>
                      <label for="Nama_jasa">Nama Jasa Kirim</label>
                      @error('Nama_jasa')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="form-floating mb-3">
                      <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" id="slug" value="{{ old('slug') }}" required/>
                      <label for="slug">Slug</label>
                      @error('slug')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>

                    <div class="form-floating mb-3">
                      <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga" id="harga" value="{{ old('harga') }}" required/>
                      <label for="harga">Harga</label>
                      @error('harga')
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
  const Nama_jasa = document.querySelector('#Nama_jasa')
  const slug = document.querySelector('#slug')

  Nama_jasa.addEventListener('change', function(){
    fetch('/createslugjaskir?Nama_jasa=' + Nama_jasa.value)
    .then(response => response.json())
    .then(data => slug.value =data.slug)
  });

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })
</script>
@endsection
