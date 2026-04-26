<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <style>
        body {
            background-color: #f4f4f9;
            font-family: sans-serif;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .box h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        button {
            width: 100%;
            background: #004a99;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .link {
            text-align: center;
            margin-top: 10px;
        }

        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="box">
            <h2>Register</h2>

            <form method="POST" action="/register">
                @csrf

                <input type="text" name="name" placeholder="Nama">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror

                <input type="text" name="username" placeholder="Username">
                @error('username')
                    <div class="error">{{ $message }}</div>
                @enderror

                <input type="email" name="email" placeholder="Email">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror

                <input type="password" name="password" placeholder="Password">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror

                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">

                <button type="submit">Daftar</button>
            </form>

            <div class="link">
                Sudah punya akun? <a href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>

</body>

</html>
