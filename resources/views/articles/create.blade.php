<!DOCTYPE html>
<html>
<head>
    <title>Create Your Inspiration Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f2f2f2;
        }
        form {
            width: 60%;
            margin: 0 auto;
            display: grid;
            gap: 20px;
        }
        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-group {
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
        h1 {
            text-align: center;
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
