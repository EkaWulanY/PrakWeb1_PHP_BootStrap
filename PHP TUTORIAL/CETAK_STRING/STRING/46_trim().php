<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$x = " Hello World! ";
echo trim($x);
?> 

<p>Spasi putih tidak terlihat dalam HTML biasa,,<br>
tetapi lihat perbedaannya di dua kolom input:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?> 

</body>
</html>