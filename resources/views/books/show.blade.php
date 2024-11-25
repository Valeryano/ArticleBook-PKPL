<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Books</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #000;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        td:last-child {
            text-align: center;
        }
        button {
            padding: 8px 12px;
            cursor: pointer;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>List of Books</h1>

    <table>
        <thead>
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>Judul</td>
                <td>{{ $book->Judul }}</td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>{{ $book->Penulis }}</td>
            </tr>
            <tr>
                <td>ISBN/ISSN</td>
                <td>{{ $book->ISBN_ISSN }}</td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>{{ $book->Penerbit }}</td>
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
                <td>{{ $book->Jumlah_Halaman }}</td>
            </tr>
            <tr>
                <td>DOI</td>
                <td>{{ $book->DOI }}</td>
            </tr>
            <tr>
                <td>URL</td>
                <td>{{ $book->URL }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <a href="{{ route('books.edit', ['id' => $book->id]) }}">
                        <button style="background-color: #28a745;">Edit</button>
                    </a>
                    <form action="{{ route('books.destroy', ['id' => $book->id]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: #dc3545;" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
