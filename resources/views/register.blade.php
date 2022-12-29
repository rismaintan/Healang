<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <script src="{{ url('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ url('js/popper.min.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>

    <title>Register (heal)ang</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-2 order-md-1" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-1 order-md-2">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Register to <strong>(heal)ang</strong></h3><br>
            <form action="#" method="post" >
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email">
              </div>
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="Username" id="username">
              </div>
              <div class="form-group first">
                <label for="username">No HP</label>
                <input type="text" class="form-control" placeholder="Phone Number" id="no_hp">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                {{-- <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label> --}}
                Sudah Punya Akun? 
                <span class="ml-auto"><a href="#" class="forgot-pass"></a></span> 
              </div>

              <input type="submit" value="Register" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  </body>
</html>