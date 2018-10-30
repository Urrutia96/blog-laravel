<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login | Laravel Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Optional Css -->
    <style>
        :root {
          --input-padding-x: .75rem;
          --input-padding-y: .75rem;
        }
        
        html,
        body {
          height: 100%;
        }
        
        body {
          display: -ms-flexbox;
          display: flex;
          -ms-flex-align: center;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }
        
        .form-signin {
          width: 100%;
          max-width: 420px;
          padding: 15px;
          margin: auto;
        }
        
        .form-label-group {
          position: relative;
          margin-bottom: 1rem;
        }
        
        .form-label-group > input,
        .form-label-group > label {
          padding: var(--input-padding-y) var(--input-padding-x);
        }
        
        .form-label-group > label {
          position: absolute;
          top: 0;
          left: 0;
          display: block;
          width: 100%;
          margin-bottom: 0; /* Override default `<label>` margin */
          line-height: 1.5;
          color: #495057;
          cursor: text; /* Match the input under the label */
          border: 1px solid transparent;
          border-radius: .25rem;
          transition: all .1s ease-in-out;
        }
        
        .form-label-group input::-webkit-input-placeholder {
          color: transparent;
        }
        
        .form-label-group input:-ms-input-placeholder {
          color: transparent;
        }
        
        .form-label-group input::-ms-input-placeholder {
          color: transparent;
        }
        
        .form-label-group input::-moz-placeholder {
          color: transparent;
        }
        
        .form-label-group input::placeholder {
          color: transparent;
        }
        
        .form-label-group input:not(:placeholder-shown) {
          padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
          padding-bottom: calc(var(--input-padding-y) / 3);
        }
        
        .form-label-group input:not(:placeholder-shown) ~ label {
          padding-top: calc(var(--input-padding-y) / 3);
          padding-bottom: calc(var(--input-padding-y) / 3);
          font-size: 12px;
          color: #777;
        }
        
        /* Fallback for Edge
        -------------------------------------------------- */
        @supports (-ms-ime-align: auto) {
          .form-label-group > label {
            display: none;
          }
          .form-label-group input::-ms-input-placeholder {
            color: #777;
          }
        }
        
        /* Fallback for IE
        -------------------------------------------------- */
        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
          .form-label-group > label {
            display: none;
          }
          .form-label-group input:-ms-input-placeholder {
            color: #777;
          }
        }
        
        </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Blog Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            @auth
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('admin.index') }}">Dashboard
              </a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
  
          <!-- Blog Entries Column -->
          <div class="col-md-12">
              <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="text-center mb-4">
                      <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1>
                      
                  </div>
              
                  <div class="form-label-group">
                      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus value="{{ old('email') }}">
                      <label for="inputEmail">Email address</label>
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              
                  <div class="form-label-group">
                      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                      
                  </div>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              
                  <div class="checkbox mb-3">
                      <label>
                      <input type="checkbox" value="remember-me"> Remember me
                      </label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                  <p class="mt-5 mb-3 text-muted text-center">urrutia96</p>
              </form>
  
          </div>
  
  
        </div>
        <!-- /.row -->
  
      </div>
      <!-- /.container -->



    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    
    @yield('scripts')

  </body>

</html>
