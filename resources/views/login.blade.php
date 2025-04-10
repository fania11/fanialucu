<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-center">Form Login</h4>
                <form action="{{url('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
                @if($pesan = Session::get('pesan'))
                <div class="alert alert-danger" role="alert">
                    {{$pesan}}
                </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
