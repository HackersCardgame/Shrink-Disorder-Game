

<html>
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../small-style.css" target="_blank">


  </head>
  <body>

<h1><font color=lightblue>Windows und Apple OSX</font></h1>
<h2>Für "Kinder" die Fr. 1.80 besitzen für <a href="https://produkte.migros.ch/papeteria-a6-schreib-und-bastelkarten">A6 Karten</a> aber mit Windows oder Apple OSX arbeiten:<br> Rechte Maustaste, dann Drucken auswählen, dann umgekehrt in den Drucker legen und die Rückseite drucken</h2>
oder herunterladen und dann vom Computer aus drucken: <a href=".">Directory / Verzeichnis</a><br>

<?php
   $spin = 150;

   $files = glob("./*.*");

  for ($i=0; $i<count($files); $i++)

{

$image = $files[$i];
$supported_file = array(
    'pdf',
    'gif',
    'jpg',
    'jpeg',
    'png',
    'svg'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
echo '<iframe src="./'. $image . '"  height=470 style="margin: 10px 5px;"></iframe>.';



} else {
    continue;
 }

}

?>

