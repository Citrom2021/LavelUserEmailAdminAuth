<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body style="background-color: #e9d66b">
<section class="vh-100" style="background-color: #e9d66b;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                <p class="text-center h3 fw-bold mb-5 mx-1 mx-md-4 mt-4">Please sign up in order to see your booking</p>

                <form class="mx-1 mx-md-4" action="{{route('guest.save')}}" method="post" id="main_form">
                    @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="">Your Name</label>
                      <input type="text" id="" name="name" class="form-control" />
                      <span class="text-danger error-text name_error"></span>

                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="">Your Email</label>
                      <input type="email" id="" class="form-control" name="email" />
                      <span class="text-danger error-text email_error"></span>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="">Password</label>
                      <input type="password" id="" class="form-control" name="password"/>
                      <span class="text-danger error-text password_error"></span>
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="">Repeat your password</label>
                      <input type="password" id="" class="form-control" name="password2"/>
                      <span class="text-danger error-text password2_error"></span>
                      
                    </div>
                  </div>                 

                  <div class="d-flex flex-row align-items-center mb-4">
                  <div class="form-check text-center">
                    <input class="form-check-input" type="checkbox" value="" id="myCheck" required>
                    <label class="form-check-label" for="flexCheckDefault">
                    I agree all statements in <a href="#!">Terms of service</a>
                    </label><br><br>
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    <a type="button" class="btn btn-primary btn-lg" href="http://localhost/hms22/hms/index.php">Back to site</a>
                  </div>
                 
                    </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="{{asset('jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('main.js')}}"></script>


</body>
</html>