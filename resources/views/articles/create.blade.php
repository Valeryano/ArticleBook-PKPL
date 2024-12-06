<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Inspiration Article</title>
    <style>
        /* Styling for the body */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f0f4f7, #c8e8f0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form styling */
        form {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 20px; /* Add margin to prevent collision with table */
        }

        /* Input and submit button styling */
        input[type="text"], input[type="submit"] {
            padding: 15px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 10px;
            border: 1px solid #d1d1d1;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        /* Form group styling */
        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        /* Error styling */
        .error {
            color: red;
            background-color: #ffe6e6;
            padding: 10px;
            border: 1px solid #ffcccc;
            margin-bottom: 15px;
            border-radius: 10px;
        }

        /* Title styling */
        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 2em;
            margin-bottom: 30px;
        }

        /* Responsive styling */
        @media (max-width: 600px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>Create Your Inspiration Article</h1>

    @if ($errors->any())
        <div class="error">
            <strong>Error:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('articles.store') }}">
        @csrf
        <div class="form-group">
            <label for="judul_artikel">Judul Artikel:</label>
            <input type="text" id="judul_artikel" name="Judul_Artikel">
        </div>
        <div class="form-group">
            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="Penulis">
        </div>
        <div class="form-group">
            <label for="nama_jurnal">Nama Jurnal:</label>
            <input type="text" id="nama_jurnal" name="Nama_Jurnal">
        </div>
        <div class="form-group">
            <label for="volume_journal">Volume Journal:</label>
            <input type="text" id="volume_journal" name="Volume_Jurnal">
        </div>
        <div class="form-group">
            <label for="halaman">Halaman:</label>
            <input type="text" id="halaman" name="Halaman">
        </div>
        <div class="form-group">
            <label for="issn">ISSN:</label>
            <input type="text" id="issn" name="ISSN">
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="Penerbit">
        </div>
        <div class="form-group">
            <label for="url">URL:</label>
            <input type="text" id="url" name="URL">
        </div>
        <div class="submit-button">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>
