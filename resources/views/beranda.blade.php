<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>POS</title>
    <style>
        .bg-body-tertiary {
            background-color: #f8f9fa !important;
        }.navbar .nav-link {
            color: #E195AB !important;
        }
    </style>
</head>
<body>
    <!--navbar-->
    <header>
        <nav class="navbar bg-body-tertiary" >
            <div class="container">
              <a>
                <img src="{{ asset('img/keranjang-removebg-preview.png') }}" width="50" height="50">
              </a>
              <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="{{ Request::is('barang') ? 'nav-link active' : 'nav-link' }}"
                       href="{{ url('barang') }}"
                       role="button">barang</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('petugas') ? 'nav-link active' : 'nav-link' }}"
                       href="{{ url('petugas') }}"
                       role="button">petugas</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('transaksi') ? 'nav-link active' : 'nav-link' }}"
                       href="{{ url('transaksi') }}"
                       role="button">transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('logout') ? 'nav-link active' : 'nav-link' }}"
                       href="{{ url('logout') }}"
                       role="button">Logout</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <!---->
    <figure class="text-center">
        <blockquote class="blockquote">
          <b><h1>fanshop</b></h1>
        </blockquote>
        <figcaption class="blockquote-footer">
          Toko penjualan terpercaya
        </figcaption>
    </figure>
    <!---->
    <div class="container mt-5">
        @yield('konten')
    </div>
</body>
</html>
