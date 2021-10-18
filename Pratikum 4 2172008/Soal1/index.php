<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Christopher Richard Alexander 2172008">
    <title>Soal 1</title>
</head>
<body>
    <h4 align="center">Form Input</h4>
    <form action="index1.php" name="forminput" method="post">
        <table style="margin: auto;">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Phone number</td>
            <td>:</td>
            <td><input type="text" name="nomor"></td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td>:</td>
            <td><input type="text" name="hobby"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td>:</td>
            <td><textarea name="desc" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><input type="submit"><input type="reset"></td>
        </tr>
        </table>
    </form>
</body>
</html>