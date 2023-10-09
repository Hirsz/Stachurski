<?php
$name = $_GET["h"];
if (empty($name)){
    echo "Nazwisko is empty";
} else {
    $ddd= sha1($name);
    echo $ddd."<br>";
}
$imie = $_GET["i"];
if (empty($name)){
    echo "Imie is empty";
} else {
    echo $imie."<br>";
}
    $con = new mysqli('127.0.0.1', 'root', '', 'tak');
   // $q="INSERT INTO tabelka(lp,login,hasło) values('','$imie','$ddd')";
   $q="SELECT login, hasło from tabelka where login='".$imie."'";
    $add = mysqli_query($con, $q);

    while($row = mysqli_fetch_array($add))

    {echo $row['login'] . " " . $row['hasło']; echo "<br>";
    $fff=$row['login'];
    $ggg=$row['hasło'];
} 
if($ddd===$ggg)
{
    echo"haslo jest takie samo";
}
else{    
    echo"haslo nie jest takie same";
}
mysqli_close($con);

?>