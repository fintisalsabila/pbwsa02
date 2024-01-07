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
            <td>NIM</td>
            <td>Nama</td>
        </tr>
        @foreach($mhs as $i)
        <tr>
            <td>{{ $i->nim }}</td>
            <td>{{ $i->nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

<!--1321046 - FINTI SASA SABILA-->