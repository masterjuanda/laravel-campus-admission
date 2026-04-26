<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Universitas MBP</title>
    <style>
        /* Masukkan CSS Login kamu di sini */
        body {
            background-color: #f4f4f9;
            font-family: sans-serif;
            margin: 0;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .btn-login {
            width: 100%;
            background-color: #004a99;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .error-msg {
            color: #dc3545;
            background: #f8d7da;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login Admin</h2>
            <p>Universitas Contoh Teknologi Medan</p>

            @if ($errors->has('error'))
                <div class="error-msg">{{ $errors->first('error') }}</div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required autofocus>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit" class="btn-login">Masuk Sekarang</button>
            </form>
            <br>
            <a href="{{ url('/') }}" style="text-decoration:none; color:#666; font-size: 0.8em;">&larr; Kembali
                ke Situs</a>
        </div>
    </div>
</body>

</html>
