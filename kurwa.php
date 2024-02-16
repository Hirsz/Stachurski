<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Strona</title>
    <link href="co.css" type="text/css" rel="stylesheet">
  </head>


<?php

$con = new mysqli("127.0.0.1","root","","focie");
 
$q="SELECT lp, nazwa, rozszerzenie FROM dziwki";
 
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo ("<img src=" . $row["nazwa"] . "." . $row["rozszerzenie"] .   " > <br/>");

?>