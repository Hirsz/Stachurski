<?php
session_start();
?>

<?php

$imie = $_POST['imie'];
$rozmiar = $_POST['rozmiar'];

$_SESSION["xxx"] = $imie;
print_r($_SESSION["xxx"]);

$_SESSION["zzz"] = $rozmiar;
print_r($_SESSION["zzz"]);

?>

<html>
<body>

<a href="odczyt.php">dalej</a>


</body>
</html>