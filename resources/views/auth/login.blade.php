<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal Web</title>
    <style>
        * {
            text-decoration: none;
            margin: 0px;
            padding: 0px;
        }

        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Open Sans', sans-serif;
            background-color: #f2f2f2;
        }

        .wrapper {
            width: 1100px;
            margin: auto;
            position: relative;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo a {
            font-size: 50px;
            font-weight: 800;
            float: left;
            font-family: courier;
            color: #364f6b;
        }

        .logo img {
            width: 180px;
            height: auto;
        }

        .menu {
            float: right;
        }

        nav {
            width: 100%;
            margin: auto;
            display: flex;
            line-height: 80px;
            position: sticky;
            top: 0;
            background: #333333;
            color: #ffffff;
            z-index: 1;
            border-bottom: 1px solid #fbfbfc;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            color: #000000;
            font-weight: bold;
            text-align: center;
            padding: 0px 16px;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        nav ul li a:hover {
            color: #cccccc;
            transform: scale(1.1);
        }

        section {
            margin: auto;
            display: flex;
            margin-bottom: 100px;
            background-color: #f7f7f7;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-family: 'comic sans ms';
            font-weight: 800;
            font-size: 45px;
            margin-bottom: 20px;
            margin-top: 150px;
            color: #333333;
            width: 100%;
            line-height: 50px;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1000;
            display: none; /* Awalnya disembunyikan */
        }

        .form-wrapper {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            animation: slideIn 0.5s ease;
        }

        .form-wrapper h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #3f72af;
        }

        .form-wrapper input[type='text'], .form-wrapper input[type='password'] {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #dcdcdc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-wrapper input[type='text']:focus, 
        .form-wrapper input[type='password']:focus {
            border-color: #3f72af;
            outline: none;
        }

        .form-wrapper button {
            width: 100%;
            padding: 15px;
            background: #3f72af;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form-wrapper button:hover {
            background: #fc5185;
        }

        .error-messages {
            margin-top: 10px;
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            list-style-type: none;
        }
        .error-messages ul {
            margin: 0;
            padding: 0;
        }
        .error-messages li {
            margin: 0;
        }

        p {
            text-align: center;
            margin-top: 15px;
        }

        p a {
            color: #3f72af;
            text-decoration: underline;
            transition: color 0.3s;
        }

        p a:hover {
            color: #fc5185;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-message {
            display: none; /* Awalnya disembunyikan */
            text-align: center;
            margin-top: 50px;
            font-size: 24px;
            color: #3f72af;
        }
    </style>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''><img src="https://tse1.mm.bing.net/th?id=OIP.GAkumqNRmvHsir1F6JLTPAHaD4&pid=Api&P=0&h=180" alt=""></a></div>
            <div class="menu">
                <ul>
                    <li><a href="#tutors">Creator</a></li>
                    <li><a href="#partners">Content</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="javascript:void(0)" onclick="showLogin()">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <section id="home">
            <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161" alt="Gambar Utama">
            <div class="kolom">
                <h2>Find Yours Inspirations Jurnals</h2>
                <form action="#" method="get">
                    <button type="submit" class="tbl-pink"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </section>
        
        
    </div>

    <!-- Login Form -->
    <div class="form-container" id="login-form">
        <div class="form-wrapper">
            <span class="close" onclick="hideLogin()">&times;</span>
            <h2>Login</h2>
            
            @if(session('success'))
                <div class="error-messages" style="background-color: #d4edda; color: #155724;">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="error-messages">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf
                <input type="text" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit">Login</button>
                @if ($errors->any())
                    <div class="error-messages">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </div>
    </div>

    <script>
        function showLogin() {
            document.getElementById('login-form').style.display = 'flex';
        }

        function hideLogin() {
            document.getElementById('login-form').style.display = 'none';
        }

        // Cek jika ada session pesan sukses, maka tampilkan welcome message
        @if(session('success'))
            document.getElementById('welcome-message').style.display = 'block';
        @endif
    </script>
</body>
</html>
