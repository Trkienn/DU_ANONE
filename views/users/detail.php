<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết người dùng: <?=$users ['name']?></title>
</head>
<body>
    <h1>Chi tiết người dùng: <?=$users ['name']?></h1>
    <table>
        <tr>
            <tr>Tên thị trường</tr>
            <tr>Giá trị</tr>
        </tr>
        <tr>
            <td>Name:</td>
            <td><?=$users ['name']?></td>
        </tr>
        <tr>
            <td>Emai:</td>
            <td><?=$users ['email']?></td>
        </tr>
    </table>
</body>
</html>