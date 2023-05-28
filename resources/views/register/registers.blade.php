<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="/register" method="POST">
    @csrf
    <label for="name">Full Name</label>
    <input type="text" class=" @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your name..">
    @error('name')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>  
    @enderror

    <label for="username">Last Name</label>
    <input type="text" class=" @error('username') is-invalid @enderror" id="username" name="username" placeholder="Your username..">
    @error('username')
    <div class="invalid-feedback">
      {{ $message  }}
    </div>  
    @enderror

    <label for="no_telp">No Telepon</label>
    <input type="text" class=" @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="Your telp..">
    @error('no_telp')
    <div class="invalid-feedback">
      {{ $message  }}
    </div>  
    @enderror

    <label for="email">Email</label>
    <input type="text" class=" @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your email..">
    @error('email')
    <div class="invalid-feedback">
      {{ $message  }}
    </div>  
    @enderror

    <label for="password">Password</label>
    <input type="text" class=" @error('password') is-invalid @enderror" id="password" name="password" placeholder="Your password..">
    @error('password')
    <div class="invalid-feedback">
      {{ $message  }}
    </div>  
    @enderror
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>


