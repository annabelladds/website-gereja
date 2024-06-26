<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" href="img/church (2).png" type="image/png">
    <title>Login - HKBP Sultan Mazmur Pancawati</title>
    <style>
        body {
            background-image: url('/img/Berdoa.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Nunito', sans-serif;
        }

        .card {
            background: #FFFFFF;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 360px;
        }

        .title-login {
            color: #00397D;
            font-size: 19px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
        }

        .isi-login {
            color: #868686;
            font-size: 14px;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .title-isi {
            font-size: 14px;
            color: #000;
            margin-bottom: 0.5rem;
        }

        .form-floating {
            margin-bottom: 1rem;
        }

        .form-floating label {
            color: #9B9B9B;
            font-size: 13px;
        }

        .form-floating input {
            height: 45px;
            padding-left: 0.75rem;
        }

        .btn-masuk {
            width: 100%;
            background-color: var(--font-600, #00397D);
            color: #FFFFFF;
            font-size: 14px;
            font-weight: 300;
            border-radius: 4px;
            padding: 0.5rem;
            margin-top: 1.5rem;
        }

        .btn-masuk:hover {
            width: 100%;
            background-color: var(--font-600, #005EC6);
            color: #FFFFFF;
            font-size: 14px;
            font-weight: 300;
            border-radius: 4px;
            padding: 0.5rem;
            margin-top: 1.5rem;
        }

        @media (max-width: 575.98px) {
            body {
                padding: 1rem;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>
<body class="login-body">
    <div class="card login-card">
        {{-- @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif --}}

        {{-- @if(session()->has('success'))
        <script>
            window.location.href = '{{ url("/dashboard") }}';
        </script>
        @endif --}}

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-signin">
            <p class="title-login">HKBP Sultan Mazmur Pancawati</p>
            <p class="isi-login">Masukkan username dan password Anda!</p>
            <form action="/login" method="post">
                @csrf
                <p class="mb-1 title-isi">Username</p>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                    <label for="username">Masukkan username Anda</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <p class="mb-1 mt-4 title-isi">Password</p>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Masukkan password Anda</label>
                </div>
                <button class="btn btn-masuk" type="submit">Masuk</button>
            </form>
        </main>
    </div>
</body>
</html>
