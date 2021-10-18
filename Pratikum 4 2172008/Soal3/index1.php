<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Christopher Richard Alexander 2172008">
    <title>Soal 3</title>
</head>
<body>
<form name="Board" action="index1.php" method="post">
    <p>Create A Chess Board</p>
    <p> Ukuran board <input type="text" name="ukuran"></p>
    <input type="submit" value="Buat board">
<table border="1">
<?php
$ukuran = $_POST['ukuran'];

for ($i=1; $i<=$ukuran; $i++){
    echo "<tr>";
    for ($j=1; $j<=$ukuran; $j++){
        if(($i + $j)%2==0){
            echo"<td width=80 height=80 bgcolor= #000000></td>";
        }else{
            echo"<td width=80 height=80 bgcolor= #ffffff></td>";
        }
    }
}
?>
</table>
</form>
</body>
</html>
 