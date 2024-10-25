<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for Glass UI -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url('https://t3.ftcdn.net/jpg/07/38/89/48/360_F_738894857_62jRatktPCpiBnPiBHrBLgy5ecPD1gTR.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Dark overlay to darken the background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Darker overlay */
            z-index: 0;
        }

        .glass-card {
            position: relative;
            z-index: 1;
            backdrop-filter: blur(20px); /* Increased blur for a glassy effect */
            background: rgba(255, 255, 255, 0.25); /* Increased opacity */
            border-radius: 15px;
            padding: 30px; /* Added padding for more space */
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3); /* Softer, deeper shadow */
            border: 1px solid rgba(255, 255, 255, 0.3); /* More visible border */
            width: 100%;
            max-width: 400px;
            color: #ffffff;
        }

        .glass-card .card-header {
            font-size: 2rem; /* Slightly larger header */
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ffffff; /* Adjusted color */
            font-weight: bold;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3); /* Softer, deeper shadow */

        }

        .form-control {
            background: rgba(255, 255, 255, 0.2); /* Lighter background */
            border: 1px solid rgba(255, 255, 255, 0.4); /* Lighter border */
            color: #ffffff;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3); /* Brighter focus state */
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
            color: #ffffff;
        }

        label {
            color: #ffffff;
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(45deg, #6a11cb, #2575fc); /* Gradient effect */
            border: none;
            color: white;
            font-weight: bold;
            padding: 12px; /* More padding */
            transition: background 0.3s ease;
            border-radius: 25px; /* Rounded corners */
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #2575fc, #6a11cb); /* Reverse gradient on hover */
        }

        .btn-link {
            color: rgba(255, 255, 255, 0.9);
        }

        .form-check-label {
            color: rgba(255, 255, 255, 0.9);
        }

        .invalid-feedback {
            color: #ff7675;
        }
    </style>
</head>
<body>
    <div class="glass-card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>

                <div class="mb-0">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Login') }}</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link mt-2" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
