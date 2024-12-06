<!DOCTYPE html>
<html>
<head>
    <title>Edit Article</title>
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
        button[type="submit"] {
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
    <h1>Edit Article</h1>

    <form method="POST" action="{{ route('articles.update', $article->id) }}">
        @csrf
        @method('PUT')

        <!-- Input fields untuk mengedit artikel -->
        <div class="form-group">
            <label for="judul_artikel">Judul Artikel:</label>
            <input type="text" id="judul_artikel" name="Judul_Artikel" value="{{ old('Judul_Artikel', $article->Judul_Artikel) }}">
            @error('Judul_Artikel')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="Penulis" value="{{ old('Penulis', $article->Penulis) }}">
            @error('Penulis')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nama_jurnal">Nama Jurnal:</label>
            <input type="text" id="nama_jurnal" name="Nama_Jurnal" value="{{ old('Nama_Jurnal', $article->Nama_Jurnal) }}">
            @error('Nama_Jurnal')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="volume_journal">Volume Jurnal:</label>
            <input type="text" id="volume_journal" name="Volume_Jurnal" value="{{ old('Volume_Jurnal', $article->Volume_Jurnal) }}">
            @error('Volume_Jurnal')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="halaman">Halaman:</label>
            <input type="text" id="halaman" name="Halaman" value="{{ old('Halaman', $article->Halaman) }}">
            @error('Halaman')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ISSN">ISSN:</label>
            <input type="text" id="issn" name="ISSN" value="{{ old('ISSN', $article->ISSN) }}">
            @error('ISSN')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="Penerbit" value="{{ old('Penerbit', $article->Penerbit) }}">
            @error('Penerbit')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="url">URL:</label>
            <input type="text" id="url" name="URL" value="{{ old('URL', $article->URL) }}">
            @error('URL')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
