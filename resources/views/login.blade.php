<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>Login</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In</h3>
                                <p class="mb-4">Welcome back !</p>
                            </div>
                            @if (Session::has('login'))
                                <small class="text-danger">
                                    {{ Session::get('login') }}
                                </small>
                            @endif
                            <form action="{{ route('login-handle') }}" method="post">
                                @csrf

                                <div class="form-group " class="@error('email') text-danger @enderror">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        @error('email') border border-danger @enderror>
                                    @error('email')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group" class="@error('password') text-danger @enderror">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        @error('password') border border-danger @enderror>
                                    @error('password')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>



                                <input type="submit" value="login" class="btn btn-block btn-primary mt-3">

                                <span class="d-block text-left my-4 text-muted">&mdash; Don't have account? <a
                                        href="{{ route('register') }}" class="text-primary">Register</a> </span>

                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
