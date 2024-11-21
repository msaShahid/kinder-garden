<!doctype html>
<html lang="en" class="h-100">
  <head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>
        @hasSection('pre_title')
            @yield('pre_title') |
        @endif
        @yield('title', config('app.name'))
    </title>
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/assets/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"/>
    
    {{-- Custom Stylesheets --}}
    @stack('css')
  </head>
  <body class="h-100">


    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">Kinder Garden</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
    
            </ul>
          </div>
        </div>
    </nav>
    
    @yield('content')

      {{-- footer --}}
      <footer>
        <div class="container">
            <div class="copyright mb-1">
                &copy; <strong>{{ config('app.name') }}</strong> | All Rights Reserved.
            </div>
        </div>
    </footer>
    


    {{-- Script  --}}
    <script src="{{ asset('dist/assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    {{-- Custom Scripts --}}
    @stack('js')

  </body>
</html>