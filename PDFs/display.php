

<html>
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../small-style.css" target="_blank">


  </head>
  <body>

<h1><font color=lightblue>Windows und Apple OSX</font> <font color=yellow></font> ★★★☆☆ (3/5)</h1>
<font color=yellow>☠ Achtung, das Spiel ist nicht ganz ungefährlich,</font> nicht wegen dem Spiel, aber wegen denen, die solche Technologie missbrauchen und diese gerne weiterhin im "Geheimen" gegen jüngere Missbrauchen würden <font color=yellow>☠</font>
<h2>Für "Kinder" die Fr. 1.80 besitzen für <a href="https://produkte.migros.ch/papeteria-a6-schreib-und-bastelkarten">50 Stück A6 Schreib-Karten</a> aber mit Windows oder Apple OSX arbeiten:<br> Rechte Maustaste, dann Drucken auswählen, dann umgekehrt in den Drucker legen und die Rückseite drucken</h2>
oder herunterladen und dann vom Computer aus drucken: <a href=".">Directory / Verzeichnis</a><br>
<br>
<font size=10 class=blink color=yellow><b>⚠</b></font> <font size=5 color=tomato><b>zuerst muss man noch Drucker-Einstellungen machen und allenfalls das <font color=lightblue>Format A6</font> freischalten und insbesondere beim Laser Drucker "<font color=lightblue>Dickeres Papier</font>" einstellen, damit der Drucker den Toner genug einbrennt! [Bild 1] [Bild 2]</b></font>

<br><br>
<a href="./windowsPrinterSettings1.png"><img src="./windowsPrinterSettings1.png" height=300></a> <a href="./windowsPrinterSettings2.png"><img src="./windowsPrinterSettings2.png" height=300></a>
<br>

<?php
   $spin = 150;

   $files = glob("./*.*");

  for ($i=0; $i<count($files); $i++)

{

$image = $files[$i];
$supported_file = array(
    'pdf'
);

// , 'gif','jpg','jpeg','png','svg'

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
echo '<iframe src="./'. $image . '"  width=350 height=470 style="margin: 10px 5px;"></iframe>.';



} else {
    continue;
 }

}

?>

  </body>
</html>

