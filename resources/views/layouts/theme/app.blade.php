<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>  
    app
  </title>
  {{-- <script src="https://kit.fontawesome.com/8f2b7a3254.js" crossorigin="anonymous"></script> --}}
  
  @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/scripts.js'])
</head>
<body class="g-sidenav-show  bg-gray-100">   

  @include('layouts.theme.sidebar')

  <main class="main-content border-radius-lg ">

  @include('layouts.theme.navbar')

    <div class="container-fluid py-4">              

    @yield('content')
    
    @include('layouts.theme.footer')


    </div>

         
  </main>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

  </body>

</html>
