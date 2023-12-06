<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Signup</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="img.jpeg" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <section class="vh-100" style="background-color: white;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/login2.jpg" style="height: 740px"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: #CDBBA7">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/signup" method="post">
                    @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Sign up</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                  <div class="form-floating mb-3">
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Name" required value="{{ old('nama') }}"/>
                    <label for="nama">Name</label>

                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Userame" required value="{{ old('username') }}"/>
                    <label for="username">Username</label>

                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                    <select class="form-select" name="role_id" id="role_id">
                        <option selected>Choose your role user</option>
                        <option value="1">Admin</option>
                        <option value="2">Customer</option>
                    </select>
                    <label for="role_id">Role User</label>

                    @error('role_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required value="{{ old('email') }}"/>
                    <label for="email">Email Address</label>

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required/>
                    <label for="password">Password</label>

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="pt-1  mt-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Register an Account</button>
                  </div>
                  <small>Already Registered?<a class="text-decoration-none" href="/login">Please Login!</a></small>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>
</html>
