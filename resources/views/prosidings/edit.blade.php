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
    <title>Edit Prosiding</title>
    <style>
        /* Styling sesuai kebutuhan */
    </style>
</head>
<body>
    <h1 style="text-align: center;">Edit Prosiding</h1>

    <form method="POST" action="{{ route('prosidings.update', $prosidings->id) }}">
        @csrf
        @method('PUT')

        <!-- Input fields untuk mengedit buku -->
        <label for="judul_artikel">Judul_Artikel:</label>
        <input type="text" id="judul_artikel" name="Judul_Artikel" value="{{ $prosidings->Judul_Artikel }}"><br><br>

        <label for="penulis">Penulis:</label>
        <input type="text" id="penulis" name="Penulis" value="{{ $prosidings->Penulis }}"><br><br>
        
        <label for="nama_seminar">Nama_Seminar:</label>
        <input type="text" id="nama_seminar" name="Nama_Seminar" value="{{ $prosidings->Nama_Seminar }}"><br><br>
        
        <label for="penyelenggara_seminar">Penyelenggara_Seminar:</label>
        <input type="text" id="penyelenggara_seminar" name="Penyelenggara_Seminar" value="{{ $prosidings->Penyelenggara_Seminar }}"><br><br>
        
        <label for="waktu_pelaksaaan">Waktu_Pelaksaaan:</label>
        <input type="text" id="waktu_pelaksaaan" name="Waktu_Pelaksaaan" value="{{ $prosidings->Waktu_Pelaksaaan }}"><br><br>

        <label for="ISBN_ISSN">ISBN_ISSN:</label>
        <input type="text" id="isbn_issn" name="ISBN_ISSN" value="{{ $prosidings->ISBN_ISSN }}"><br><br>

        <label for="url">URL:</label>
        <input type="text" id="url" name="URL" value="{{ $prosidings->URL }}"><br><br>

        <!-- tambahkan field lainnya sesuai kebutuhan -->

        <button type="submit">Update</button>
    </form>
</body>
</html>
