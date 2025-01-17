<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>POS</title>

    <!--font-->
</head>
<body>
    <!--navbar-->
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{ asset('img/keranjang.jpg') }}" width="50" height="50">
              </a>
              <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="{{ Request::is('') ? 'nav-link active' : 'nav-link' }}"
                       href="{{ url('') }}"
                       role="button">home</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('barang') ? 'nav-link active' : 'nav-link' }}"
                       href="{{ url('barang') }}"
                       role="button">barang</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('beli') ? 'nav-link active' : 'nav-link' }}"
                       href="{{ url('beli') }}"
                       role="button">beli</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <!---->
    <h3>DATA BARANG</h3>
</body>
</html>
