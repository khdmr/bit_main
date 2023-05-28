<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/style-login.css" />
    <title>Login & Register Form</title>
  </head>
  <body>
    {{-- @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if (session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif --}}
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="/login" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">LOGIN HERE!</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" id="email" placeholder="Email" class="@error('email') is-invalid @enderror" />
            </div>
            @error('email')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>  
        @enderror
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror" />
            </div>
            @error('password')
            <div class="invalid-feedback">
              {{ $message  }}
            </div>  
            @enderror
            <input type="submit" value="Login" class="btn solid" />
          </form>
          <form action="/register" method="POST" class="sign-up-form">
            @csrf
            <h2 class="title">Sign up here!</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" id="username" placeholder="Username" class="@error('username') is-invalid @enderror" />
            </div>
            @error('username')
            <div class="invalid-feedback">
              {{ $message  }}
            </div>  
            @enderror
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" class="@error('email') is-invalid @enderror" />
            </div>
            @error('email')
            <div class="invalid-feedback">
              {{ $message  }}
            </div>  
            @enderror
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror"/>
            </div>
            @error('password')
            <div class="invalid-feedback">
              {{ $message  }}
            </div>  
            @enderror

            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Punya Akun?</h3>
            <p>
              Silahkan daftar dengan mengeklik tombol dibawah ini
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Register
            </button>
          </div>
          <img src="assets/img/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Punya Akun?</h3>
            <p>
              Silahkan kembali ke form Login dengan mengeklik tombol dibawah ini
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Kembali
            </button>
          </div>
          <img src="assets/img/login.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/login.js"></script>
    <script>
      let msgerror = '{{Session::get('loginError')}}';
      let existerror = '{{Session::has('loginError')}}';
      let msgsuccess = '{{Session::get('success')}}';
      let existsuccess = '{{Session::has('success')}}';
      if(existerror){
        alert(msgerror);
      }
      if(existsuccess){
        alert(msgsuccess);
      }
    </script>
  </body>
</html>