<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$con = new mysqli("127.0.0.1","root","","wedkowanie");
 $chujciwryj=5;
 $chujciwpizde=3;
$q="SELECT * FROM ryby where id>".$chujciwryj;
$wt='L%';
$q="SELECT * FROM ryby where id>$chujciwpizde && nazwa like '" . $wt . "';";;
 
if($wynik=$con->query($q))
while($row=$wynik->fetch_array())
echo $row["id"] . ";" . $row["nazwa"] . ";" . $row["wystepowanie"] . ";" . $row["styl_zycia"] . "<br/>";
else
echo $con->errno . " " . $con->error;
?>
