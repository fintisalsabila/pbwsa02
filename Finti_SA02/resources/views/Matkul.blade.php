<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <tr>
            <td>Kode</td>
            <td>Nama</td>
            <td>SKS</td>
        </tr>
        @foreach($mk as $i)
        <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->nama }}</td>
            <td>{{ $i->sks }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

<!--1321046 - FINTI SASA SABILA-->