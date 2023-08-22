<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Login Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="/css/main.css" rel="stylesheet">
</head>


    
    <!-- Custom styles for this template -->
  <body class="text-center">
    
    @if (session()->has('success'))
        <div class="alert alert-success">
          Register Succes!! Please Login
        </div>
    @endif

    @if (session()->has('LoginError'))
        <div class="alert alert-danger">
          Login Failed
        </div>
    @endif
    <div class="container">

        <main class="form-signin w-50 m-auto mt-5">
            <form action="/login" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>


                <p class="mt-5 mb-3 text-muted">Not Have Account?? <a href="/register">Register Now!!</a></p>
                <br>
                <p class="mt-5 mb-3 text-muted"><a href="/home">Back to Home</a></p>
            </form>
        </main>
        
    </div>

    
  </body>
</html>
