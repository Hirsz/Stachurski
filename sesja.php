<html>
<body>


<form action="odczyt.php" method="POST">

<h1>Jaki rodzaj diety?</h1>
    <input type="radio" id="Dieta"  name="Dieta" value="Cud">Cud<br>
    <input type="radio" id="Dieta" name="Dieta" value="Koks">Koks<br>
    <input type="radio" id="Dieta" name="Dieta"value="Vege">Vege<br>
<br>

<h1>Jaki rodzaj treningu?</h1>
    <input type="radio" id="Rodzaj" value="Boks">Boks<br>
    <input type="radio" id="Rodzaj" value="Silownia">Silownia<br>
    <input type="radio" id="Rodzaj" value="MMA">MMA<br>
<br>

<h1>Ilosc treningow?</h1>
    <input type="radio" id="Ilosc" value="2t">2 razy w tygodniu<br>
    <input type="radio" id="Ilosc" value="3t">3 razy w tygodniu<br>
    <input type="radio" id="Ilosc" value="5t">5 razy w tygodniu<br>



</body>
</html>

<?php
session_start();
?>

<?php

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$Plec = $_POST['Plec'];
$Dieta = $_POST['Dieta'];
$Rodzaj = $_POST['Rodzaj'];
$Ilosc = $_POST['Ilosc'];

$_SESSION["xxx"] = $imie;
print_r($_SESSION["xxx"]);

$_SESSION["zzz"] = $nazwisko;
print_r($_SESSION["zzz"]);

$_SESSION["yyy"] = $Plec;
print_r($_SESSION["yyy"]);

$_SESSION["lll"] = $Dieta;
print_r($_SESSION["lll"]);

$_SESSION["ggg"] = $Rodzaj;
print_r($_SESSION["ggg"]);

$_SESSION["hhh"] = $Ilosc;
print_r($_SESSION["hhh"]);

?>

<html>
<body>

<a href="odczyt.php"><button type="submit">Wyslij</button></a>

</form>
</body>
</html>