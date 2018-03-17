<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login Users</h5>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text"class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"class="form-control">
                        </div>
                        <div class="form-group">
                            <a href="{{ url('/table') }}" class="btn btn-primary btn-block">
                                <i class="fa fa-sign-in-alt"></i> Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ url('js/popper.min.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/fontawesome-all.min.js')}}" defer></script>
</body>
</html>