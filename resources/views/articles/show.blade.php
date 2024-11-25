<!-- resources/views/books/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>List of Article</title>
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
    <h1>List of Article</h1>

    <table>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>
        @foreach ($articles as $article)
        <tr>
            <td>Judul_Article</td>
            <td>{{ $article->Judul_Artikel }}</td>
        </tr>
        <tr>
            <td>Penulis</td>
            <td>{{ $article->Penulis }}</td>
        </tr>
        <tr>
            <td>Nama_Journal</td>
            <td>{{ $article->Nama_Jurnal}}</td>
        </tr>
        <tr>
            <td>Volume_Journal</td>
            <td>{{ $article->Volume_Jurnal }}</td>
        </tr>
        <tr>
            <td>ISSN</td>
            <td>{{ $article->ISSN }}</td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>{{ $article->Penerbit }}</td>
        </tr>
        <tr>
            <td>URL</td>
            <td>{{ $article->URL }}</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <div class="button-container">
                    <a href="{{ route('articles.edit', ['id' => $article->id]) }}">
                        <button class="edit-button">Edit</button>
                    </a>
                    <form action="{{ route('articles.destroy', ['id' => $article->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this article?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
