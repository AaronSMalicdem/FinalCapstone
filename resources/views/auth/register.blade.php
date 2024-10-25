<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

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
            background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity to make it darker */
            z-index: 0;
        }

        .glass-card {
            position: relative;
            z-index: 1;
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            border: 1px solid rgba(255, 255, 255, 0.18);
            width: 100%;
            max-width: 400px;
            color: #ffffff;
        }

        .glass-card .card-header {
            font-size: 1.75rem;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #f0f0f0;
            font-weight: bold;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
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
            padding: 10px;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #2575fc, #6a11cb); /* Reverse the gradient on hover */
        }

        .invalid-feedback {
            color: #ff7675;
        }
    </style>
</head>
<body>
    <div class="glass-card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="col-form-label">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="col-form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="mb-0">
                    <button type="submit" class="btn btn-primary w-100">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
