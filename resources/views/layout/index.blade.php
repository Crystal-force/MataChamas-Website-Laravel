<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mata Chamas</title>
    
    @include('style.style')
  </head>
  <body class="skin-default card-no-border">
    <div class="preloader">
      <div class="loader">
          <div class="loader__figure"></div>
          <p class="loader__label">Mata Chamas...</p>
      </div>
    </div>

    @yield('content')
    @include('script.script')
  </body>
</html>