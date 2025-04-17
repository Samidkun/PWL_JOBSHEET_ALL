<!DOCTYPE html>
<html>
<head>
    <title>Item Category Data</title>
</head>
<body>
    <h1>Item Category Data</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Category Code</th>
            <th>Category Name</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->kategori_id }}</td>
            <td>{{ $d->kategori_kode }}</td>
            <td>{{ $d->kategori_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
