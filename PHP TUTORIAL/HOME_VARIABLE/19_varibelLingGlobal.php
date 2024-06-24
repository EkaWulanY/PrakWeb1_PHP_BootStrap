<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$x = 5; //cakupan global
 
 function myTest() {
   // penggunaan x pada fungsi ini akan menghasilkan kesalahan
   echo "<p>Fungsi dalam variabel x adalah: $x</p>";
 } 
 myTest();
 
 echo "<p>Fungsi luar variabel x adalah: $x</p>";
 ?>
</body>
</html>