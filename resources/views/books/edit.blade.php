<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
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
    <h1>Edit Book</h1>

    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')

        <!-- Input fields untuk mengedit buku -->
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="Judul" value="{{ old('Judul', $book->Judul) }}">
            @error('Judul')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="Penulis" value="{{ old('Penulis', $book->Penulis) }}">
            @error('Penulis')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="isbn_issn">ISBN/ISSN:</label>
            <input type="text" id="isbn_issn" name="ISBN_ISSN" value="{{ old('ISBN_ISSN', $book->ISBN_ISSN) }}">
            @error('ISBN_ISSN')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="Penerbit" value="{{ old('Penerbit', $book->Penerbit) }}">
            @error('Penerbit')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jumlah_halaman">Jumlah Halaman:</label>
            <input type="text" id="jumlah_halaman" name="Jumlah_Halaman" value="{{ old('Jumlah_Halaman', $book->Jumlah_Halaman) }}">
            @error('Jumlah_Halaman')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="doi">DOI:</label>
            <input type="text" id="doi" name="DOI" value="{{ old('DOI', $book->DOI) }}">
            @error('DOI')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="url">URL:</label>
            <input type="text" id="url" name="URL" value="{{ old('URL', $book->URL) }}">
            @error('URL')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
