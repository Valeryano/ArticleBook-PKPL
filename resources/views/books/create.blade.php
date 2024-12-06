<!-- resources/views/books/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Inspiration Book</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Allow vertical stacking */
            height: 100vh;
            padding: 20px; /* Add padding to body */
        }
        .container {
            max-width: 600px; /* Set a max-width for the form */
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 30px; /* Add space below the title */
            font-size: 2.5em; /* Increase title font size */
            padding-top: 30px; /* Add space above the title */
        }
        form {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            margin-top: 20px; /* Space between title and form */
        }
        input[type="text"],
        input[type="submit"] {
            padding: 12px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 8px;
            border: 1px solid #d1d1d1;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.2);
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
        .form-group {
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        .error {
            color: red;
            background-color: #ffe6e6;
            padding: 10px;
            border: 1px solid #ffcccc;
            margin-bottom: 15px;
            border-radius: 10px;
        }
        /* Responsive design */
        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>Create Your Inspiration Book</h1>

    <div class="container">
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

        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="Judul" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" id="penulis" name="Penulis" required>
            </div>
            <div class="form-group">
                <label for="isbn_issn">ISBN/ISSN:</label>
                <input type="text" id="isbn_issn" name="ISBN_ISSN" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="Penerbit" required>
            </div>
            <div class="form-group">
                <label for="jumlah_halaman">Jumlah Halaman:</label>
                <input type="text" id="jumlah_halaman" name="Jumlah_Halaman" required>
            </div>
            <div class="form-group">
                <label for="doi">DOI:</label>
                <input type="text" id="doi" name="DOI" required>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="text" id="url" name="URL" required>
            </div>
            <div class="submit-button">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
