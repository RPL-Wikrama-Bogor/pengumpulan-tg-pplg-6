<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Apoteker App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>

<style>
  *{
      font-family: 'Raleway', sans-serif;
  }
      .nav-pills li-a:hover{
          background-color: blue;
      }

      .loader-wrapper {
width: 100%;
height: 100%;
position: absolute;
top: 0;
left: 0;
background-color: #242f3f;
display: flex;
justify-content: center;
align-items: center;
}

.loader {
display: inline-block;
width: 30px;
height: 30px;
position: relative;
border: 4px solid #Fff;
animation: loader 3s infinite ease;
}

.loader-inner {
vertical-align: top;
display: inline-block;
width: 100%;
background-color: #fff;
animation: loader-inner 2s infinite ease-in;
}

@keyframes loader {
0% {
  transform: rotate(0deg);
}

25% {
  transform: rotate(180deg);
}

50% {
  transform: rotate(180deg);
}

75% {
  transform: rotate(360deg);
}

100% {
  transform: rotate(360deg);
}
}

@keyframes loader-inner {
0% {
  height: 0%;
}

25% {
  height: 0%;
}

50% {
  height: 100%;
}

75% {
  height: 100%;
}

100% {
  height: 0%;
}
}
      
</style>
{{-- <body style="background: #e5e5e5"> --}}
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #153243;">
        <div class="container">
            <a class="navbar-brand" href="/" style="color: #16f4d0"><i class="fa-solid fa-hospital" style="margin-right: 6px;"></i>Apotek App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    @if (Auth::check())
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"
                                    style="color:white">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
                                    Obat
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('medicine.home') }}"
                                            style="background-color: whitesmoke">Data Obat</a></li>
                                    <li><a class="dropdown-item" href="{{ route('medicine.create') }}"
                                            style="background-color: whitesmoke">Tambah</a></li>
                                    <li><a class="dropdown-item" href="{{ route('medicine.stock') }}"
                                            style="background-color: whitesmoke">Stok</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('order.data') }}"
                                    style="color:white">Pembelian</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.home') }}" class="nav-link" aria-current="page"
                                    style="color: white">Kelola Akun</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"
                                    style="color:white">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('kasir.order.index') }}"
                                    style="color:white">Pembelian</a>
                            </li>
                        @endif
                        <li class="nav-item" style="margin-left: {{ Auth::user()->role == 'admin'?'700px':'800px' }}; margin-top:7px;">
                            <a href="{{ route('logout') }}" style="color: #16f4d0; text-decoration:none"> <i class="fa-solid fa-right-from-bracket fa-xl" style="margin-right: 7px"></i>Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
      });
    </script>
    @stack('script')
</body>
</html>