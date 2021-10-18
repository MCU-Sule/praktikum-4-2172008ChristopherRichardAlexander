<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Christopher Richard Alexander 2172008">
    <title>Soal 2</title>
</head>
<body>

<?php
$operasi=$_POST['ope'];
$angka1=$_POST['ang1'];
$angka2=$_POST['ang2'];
$tambah=$angka1 + $angka2;
$kurang=$angka1 - $angka2;
$kali=$angka1 * $angka2;
$bagi=$angka1 / $angka2;
$hasil='';
if($operasi == "+"){
    $hasil = $tambah;
}elseif($operasi =="-"){
    $hasil = $kurang;
}elseif($operasi =="*"){
    $hasil = $kali;
}elseif($operasi =="/"){
    $hasil = $bagi;
}
echo("
<table border=1 style= margin:auto; width=20% table-layout:fixed>
    <tr>
        <th colspan=2 style=background-color:#79fc80>Kalkulator</th>
    </tr>
    <tr>
        <td style=background-color:#209e26>Angka pertama</td>
        <td >$_POST[ang1]</td>
    </tr>
    <tr>
        <td style=background-color:#209e26>Angka kedua</td>
        <td>$_POST[ang2]</td>
    </tr>
    <tr>
        <td style=background-color:#209e26>Operator</td>
        <td>$_POST[ope]</td>
    </tr>
    <tr>
        <td colspan=2 align=center style=background-color:#79fc80> 
        Hasilnya = $hasil
        </td>
    </tr>
</table>
")
?>
</body>
</html>