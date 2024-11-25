<!-- resources/views/books/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
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
            text-align: center; /* Move buttons to the right */
        }
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        .edit-button {
            padding: 8px 12px;
            cursor: pointer;
            background-color: #28a745; /* Green color for edit button */
            color: white;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .delete-button {
            padding: 8px 12px;
            cursor: pointer;
            background-color: #dc3545; /* Red color for delete button */
            color: white;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .edit-button:hover {
            background-color: #218838; /* Darker green on hover */
        }
        .delete-button:hover {
            background-color: #c82333; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <h1>List of Laporan</h1>

    <table>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>
        @foreach ($laporans as $laporan)
        <tr>
            <td>Judul_Artikel</td>
            <td>{{ $laporan->Judul_Artikel }}</td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>{{ $laporan->Penulis }}</td>
        </tr>
        <tr>
            <td>URL</td>
            <td>{{ $laporan->URL }}</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <div class="button-container">
                    <a href="{{ route('laporans.edit', ['id' => $laporan->id]) }}">
                        <button class="edit-button">Edit</button>
                    </a>
                    <form action="{{ route('laporans.destroy', ['id' => $laporan->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
