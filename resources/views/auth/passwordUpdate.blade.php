<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Password Reset</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="{{ asset('login') }}/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('login') }}/css/util.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('login') }}/css/main.css" />
    <link
      href="{{ asset('login') }}/css/font-awesome/css/all.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="limiter">
      <div
        class="container-login100"
        style="background-image: url('{{ asset('login') }}/images/image-18.jpg')"
      >
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <form action="{{ url('/password/update') }}" class="login100-form validate-form" method="POST" >
            @csrf
            <span class="login100-form-title p-b-49">Reset Password</span>
           @if (Session::has('message'))
           <div class="alert alert-danger" role="alert">
           {{ Session::get('message') }}
          </div>
           @endif
           <div class="alert alert-success" role="alert">
            An OTP has sent to your Email.
           </div>
           <div class="wrap-input100">
            <input
              class="input100"
              type="number"
              name="otp" required autofocus
              placeholder="OTP:"
            />
          </div>
          <div class="wrap-input100 m-t-5">
            <input
              class="input100"
              type="password"
              name="password"
              required
              placeholder="Password:"
            />
          </div>
            <div class="wrap-input100 m-t-5">
              <input
                class="input100"
                type="password"
                 required autofocus
                placeholder="Confirm Password:"
              />
            </div>
            <input type="hidden" name="email" value="{{ $email }}">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <li>{{ $error }}</li>
                    </div>
                @endforeach
            <div class="container-login100-form-btn m-t-5">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" type="submit" >Password Reset</button>
              </div>
            </div>
            <div>
              <span>Find us on</span>
            </div>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-blogger"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-instagram"></i>
            <a href="" class="login100-form-anchor" style="margin-left: 140px"
              >www.junket.com</a
            >
          </form>
        </div>
      </div>
    </div>
  </body>
</html>


