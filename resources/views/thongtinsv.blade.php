<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Ten</th>
            <th>Tuoi</th>
        </tr>
        @foreach($thongtinsv as $value)
        <tr>
            <td>{{ $value['ten'] }}</td>
            <td>{{ $value['tuoi'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>