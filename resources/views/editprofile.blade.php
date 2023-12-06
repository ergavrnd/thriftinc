@extends('layouts.main')

@section('container')
<section class="" style="background-color: #CDBBA7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" style="margin-top: 70px">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-20 gradient-custom text-center text-black"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="/img/sohee.jpg"
                alt="Avatar" class="img-fluid my-2" style="width: 200px;" />
              <h5>{{ $profile[0]->nama }}</h5>
              <p>
                @if ($profile[0]->role_id === 1)
                    Admin
                @else
                    Customer
                @endif
              </p>
              <i class="far fa-edit mb-5"></i>
            </div>

            <form action="/editprofile" method="post" enctype="multipart/form-data">
                @csrf

                <div class="col-md-15">
                    <div class="card-body p-70">
                      <h6 class="text-center">Edit Your Profile</h6>
                      <hr class="mt-0 mb-4">

                        <div class="form-floating">
                            <input class="form-control @error('nama') is-invalid @enderror" placeholder="Full Name" type="text" value="{{ old('nama', $profile[0]->nama) }}" name="nama" id="nama" required/>
                            <label for="nama">Full Name</label>

                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <hr>

                        <div class="form-floating">
                            <input class="form-control @error('username') is-invalid @enderror" placeholder="Username" type="text" value="{{ old('username', $profile[0]->username) }}" name="username" id="username" required/>
                            <label for="username">Username</label>

                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <hr>

                        <div class="form-floating mb-3">

                            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                @if ($profile[0]->jenis_kelamin !== null)
                                    @if ($profile[0]->jenis_kelamin)
                                        <option value="1" selected>Male</option>
                                    @else
                                        <option value="0" selected>Female</option>
                                    @endif
                                @else
                                    <option value="1" >Male</option>
                                    <option value="0" >Female</option>
                                @endif
                            </select>
                            <label for="jenis_kelamin">Gender</label>

                            @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                          </div>
                        <hr>

                        <div class="form-floating">
                            <input class="form-control @error('notelp') is-invalid @enderror" placeholder="Phone" type="text" value="{{ old('notelp', $profile[0]->notelp) }}" name="notelp" id="notelp" required/>
                            <label for="notelp">Phone</label>

                            @error('notelp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <hr>

                        <div class="form-floating">
                            <input class="form-control @error('alamat') is-invalid @enderror" placeholder="Address" type="text" value="{{ old('alamat', $profile[0]->alamat) }}" name="alamat" id="alamat" required/>
                            <label for="alamat">Address</label>

                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <hr>

                        <div class="mb-1">
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            <input type="hidden" name="oldImage" value="{{ $profile[0]->image }}">
                            <input class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Photo Profile" type="file" value="{{ old('image', $profile[0]->image) }}" name="image"
                            onchange="previewImage()"/>
                            <label for="image">Photo Profile</label>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                    </div>
                </div>

                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                        <button class="btn btn-outline-dark mt-auto" type="submit">Save Update</button>
                    </div>
                </div>

            </form>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display='block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }

    }
  </script>
@endsection
