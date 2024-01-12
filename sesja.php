<?php
session_start();
$rozmiar_cyckow=$_GET["rozmiar_cyckow"];
$rozmiar_kutasa=$_GET["rozmiar_kutasa"];
$rozmiar_glowy=$_GET["rozmiar_glowy"];
$rozmiar_iq=$_GET["rozmiar_iq"];
$rozmiar_stopy=$_GET["rozmiar_stopy"];
$rozmiar_dupy=$_GET["rozmiar_dupy"];
$dodatki=$_GET["dodatki"];
 





 
$_SESSION["rozmiar_cyckow"] = "$rozmiar_cyckow";
$_SESSION["rozmiar_kutasa"] = "$rozmiar_kutasa";
$_SESSION["rozmiar_glowy"] = "$rozmiar_glowy";
$_SESSION["rozmiar_iq"] = "$rozmiar_iq";
$_SESSION["rozmiar_stopy"] = "$rozmiar_stopy";
$_SESSION["rozmiar_dupy"] = "$rozmiar_dupy";
$_SESSION["Dodatki"] = "$dodatki";
 




 
$zapisywanie = "<Czlowiek>\n".
"<Dane>\n".
"<rozmiar_cyckow>" . $_SESSION["rozmiar_cyckow"] . "</rozmiar_cyckow>\n" .
"<rozmiar_kutasa>" . $_SESSION["rozmiar_kutasa"] . "</rozmiar_kutasa>\n" .
"</Dane>\n".
"<Ubior>\n".
"<rozmiar_glowy>" . $_SESSION["rozmiar_glowy"] . "</rozmiar_glowy>\n" .
"<rozmiar_iq>" . $_SESSION["rozmiar_iq"] . "</rozmiar_iq>\n" .
"<rozmiar_stopy>" . $_SESSION["rozmiar_stopy"] . "</rozmiar_stopy>\n" .
"<rozmiar_dupy>" . $_SESSION["rozmiar_dupy"] . "</rozmiar_dupy>\n" .
"<dodatki>" . $_SESSION["Dodatki"] . "</dodatki>\n" .
"</Ubior>\n".
"</Czlowiek>";
$fp = fopen("plik.xml", "w");
fputs($fp, $zapisywanie);
fclose($fp);
?>
<html>
<body>
 
<a href="plik.xml">Przejdz do pliku plik.xml</a>
</body>
</html>