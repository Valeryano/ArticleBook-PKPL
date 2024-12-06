<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #007bff;
        }
        h2 {
            margin-top: 20px;
            color: #555;
        }
        form {
            margin-top: 10px;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
            background: #f9f9f9;
        }
        div {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"], input[type="password"], input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .logout-button {
            background-color: #dc3545;
        }
        .logout-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-tachometer-alt"></i> Selamat Datang di Dashboard</h1>

        @if (auth()->check())
            <p>Anda sudah login.</p>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-button">Logout</button>
            </form>
        @else
            <h2><i class="fas fa-sign-in-alt"></i> Login</h2>
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>

            <h2><i class="fas fa-user-plus"></i> Registrasi</h2>
            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div>
                    <label for="name">Nama:</label>
                    <input type="text" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" required>
                </div>
                <div>
                    <label for="password_confirmation">Konfirmasi Password:</label>
                    <input type="password" name="password_confirmation" required>
                </div>
                <button type="submit">Daftar</button>
            </form>
        @endif
    </div>
</body>
</html>
