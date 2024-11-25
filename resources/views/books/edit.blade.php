<!-- resources/views/books/edit.blade.php -->

<!DOCTYPE html>
<html>
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
<head>
    <title>Edit Book</title>
    <style>
        /* Styling sesuai kebutuhan */
    </style>
</head>
<body>
    <h1 style="text-align: center;">Edit Book</h1>

    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')

        <!-- Input fields untuk mengedit buku -->
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="Judul" value="{{ $book->Judul }}"><br><br>

        <label for="penulis">Penulis:</label>
        <input type="text" id="penulis" name="Penulis" value="{{ $book->Penulis }}"><br><br>

        <label for="penulis">ISBN_ISSN:</label>
        <input type="text" id="isbn_issn" name="ISBN_ISSN" value="{{ $book->ISBN_ISSN }}"><br><br>

        <label for="penulis">Penerbit:</label>
        <input type="text" id="penerbit" name="Penerbit" value="{{ $book->Penerbit }}"><br><br>

        <label for="penulis">Jumlah Halaman:</label>
        <input type="text" id="jumlah_halaman" name="Jumlah_Halaman" value="{{ $book->Jumlah_Halaman }}"><br><br>

        <label for="penulis">DOI:</label>
        <input type="text" id="doi" name="DOI" value="{{ $book->DOI }}"><br><br>
  
        <label for="penulis">URL:</label>
        <input type="text" id="url" name="URL" value="{{ $book->URL }}"><br><br>

        <!-- tambahkan field lainnya sesuai kebutuhan -->

        <button type="submit">Update</button>
    </form>
</body>
</html>
