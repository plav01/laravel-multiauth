<!DOCTYPE html>
<html>
<head>

    <title>Welcome to Login and Signup</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    @push('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset=md-1">
                <div class="row">
                    <div class="col-md-5 register-left">
                        <a class="" href="{{ url('/') }}">
                            <img src="/images/main-logo.png">
                        </a>
                        <h3>Join Us</h3>
                        <p>Application Consulting Perfected</p>
                        <button class="btn btn-primary" role="button" data-toggle="modal" data-target="#about">About</button>
                    </div>
                    <div class="col-md-7 register-right" id="_register">
                        <h2>Sign Up</h2>
                        <h4>It's free and always be</h4>
                        <div class="register-form">
                            <form class="" method="post" enctype="multipart/form-data" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="form-group">
                                    
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    
                                </div>
                            </form>
                        </div>
                        <div class="register">
                            <h6>Already have an account?</h6>
                             <a class="btn btn-info" href="{{'login'}}" id="login" role="button">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="about" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0 bg-light">
            <div class="modal-header">
                <h4 class="modal-title" id="about">About Us</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
             </div>
            <div class="modal-body">
                <p>MiM-Essay, as a company, was born as an answer to the low-quality consulting services plaguing the market as well as to fill up the lack of information about certain specialized degrees.
                    <blockquote><b>"In this overcrowded and undifferentiated consulting market, we strive to be different."</b></blockquote>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="modal-btn" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
