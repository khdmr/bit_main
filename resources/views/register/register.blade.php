<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="stylesheet" href="/assets/css/sign-in.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a href="/login" class="nav-link">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <main class="form-signin w-100 m-auto">
    <form action="/register" method="POST">
      @csrf
      <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Register</h1>
  
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Rohman Rohim" value="{{ old('name') }}" required>
        <label for="name">Nama Lengkap</label>
        @error('name')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>  
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="rohmanrohim21" value="{{ old('username') }}" required>
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>  
        @enderror
      </div>

      <div class="form-floating">
        <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="08121212311" value="{{ old('no_telp') }}" required>
        <label for="no_telp">No telp.</label>
        @error('no_telp')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>  
        @enderror
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>  
        @enderror
      </div>
      
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>  
        @enderror
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>

    <small class="d-block text-center mt-3">Already registered? <a href="/login">Log in here!</a></small>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></html>
</body>
</html>