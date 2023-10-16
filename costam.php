<form method='GET' action='xxx.php'>
<?php
$con = new mysqli('127.0.0.1', 'root', '', 'sklep');
$q="SELECT id, marka, rocznik, kolor, stan FROM samochody";
$f=0;
if($wynik=$con->query($q))

while($row=$wynik->fetch_array()){
echo "<input type='radio' name='fff' value=".$f.">".$row["id"] . ";" . $row["marka"] . ";" . $row["rocznik"] . ";" . $row["kolor"] . ";" . $row["stan"] ."<br/>";
//echo $f;
$f++;
}
else
echo $con->errno . " " . $con->error;
$w="SELECT COUNT('id, marka, rocznik, kolor, stan') FROM samochody";
while($q<$w){

}
?>
  <input type="submit" value="Submit">
</form>