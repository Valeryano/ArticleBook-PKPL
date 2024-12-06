<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Books</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #4CAF50;
            font-size: 2.5em;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 15px;
            font-size: 16px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #e0f7fa;
            transform: scale(1.01);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        td:last-child {
            text-align: center;
        }
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .edit-button, .delete-button, .create-button, .back-button {
            padding: 10px 15px;
            cursor: pointer;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .edit-button { background-color: #28a745; }
        .delete-button { background-color: #dc3545; }
        .create-button { background-color: #007bff; margin-bottom: 20px; }
        .back-button { background-color: #6c757d; margin-bottom: 20px; }
        .edit-button:hover { background-color: #218838; transform: scale(1.05); }
        .delete-button:hover { background-color: #c82333; transform: scale(1.05); }
        .create-button:hover { background-color: #0056b3; transform: scale(1.05); }
        .back-button:hover { background-color: #5a6268; transform: scale(1.05); }
        @media (max-width: 768px) {
            table { width: 100%; }
            h1 { font-size: 2em; }
        }
    </style>
</head>
<body>
    <h1>List of Books</h1>

    <div style="text-align: center;">
        <a href="{{ url('/welcome') }}">
            <button class="back-button">Back to Main Page</button>
        </a>
        <a href="{{ route('books.create') }}">
            <button class="create-button">Create New Book</button>
        </a>
    </div>

    <table>
        <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>ISBN/ISSN</th>
            <th>Penerbit</th>
            <th>Jumlah Halaman</th>
            <th>DOI</th>
            <th>URL</th>
            <th>Aksi</th>
        </tr>
        @if($books->isEmpty())
        <tr>
            <td colspan="8" style="text-align: center;">Tidak ada buku yang tersedia.</td>
        </tr>
        @else
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->Judul }}</td>
            <td>{{ $book->Penulis }}</td>
            <td>{{ $book->ISBN_ISSN }}</td>
            <td>{{ $book->Penerbit }}</td>
            <td>{{ $book->Jumlah_Halaman }}</td>
            <td>{{ $book->DOI }}</td>
            <td><a href="{{ $book->URL }}" target="_blank">{{ $book->URL }}</a></td>
            <td>
                <div class="button-container">
                    <a href="{{ route('books.edit', ['id' => $book->id]) }}">
                        <button class="edit-button">Edit</button>
                    </a>
                    <form action="{{ route('books.destroy', ['id' => $book->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
    </table>
</body>
</html>
