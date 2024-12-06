<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .error-message {
            color: red;
            font-size: 12px;
            text-align: left;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            margin-top: 15px;
        }
        a {
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nama:</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password_confirmation">Konfirmasi Password:</label>
                <input type="password" name="password_confirmation" required>
                @error('password_confirmation')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>
</html>
