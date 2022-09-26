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

    <title>Register</title>
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
                                <h3>Sign Up</h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                    adipisicing.</p>
                            </div>
                            <form action="{{ route('register-handle') }}" method="post">
                                @csrf
                                <div class="form-group first" class="@error('name') text-danger @enderror">
                                    <label for="fullname">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') border border-danger @enderror"
                                        id="fullname" name="name">
                                    @error('name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
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
                                <div class="form-group last mb-4"
                                    class="@error('password_confirmation') text-danger @enderror">
                                    <label for="re-password">Re-type Password</label>
                                    <input type="password" class="form-control" id="re-password"
                                        @error('password_confirmation') border border-danger @enderror
                                        name="password_confirmation">
                                    @error('password_confirmation')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                                <div class="d-flex mb-5 align-items-center"
                                    class="@error('name') text-danger @enderror">
                                    <label class="control control--checkbox mb-0"><span class="caption">Creating an
                                            account means you're okay with our <a href="#">Terms and
                                                Conditions</a> and our <a href="#">Privacy Policy</a>.</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                </div>

                                <input type="submit" value="Register" class="btn btn-block btn-primary">

                                <span class="d-block text-left my-4 text-muted">&mdash; Have account? <a
                                        href="{{ route('login') }}" class="text-primary">login</a> </span>

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
