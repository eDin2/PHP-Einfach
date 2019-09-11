<?php
$zitate = file_get_contents('zitate.txt');
echo nl2br($zitate);
// nl2br()  welche Zeilenumbrüche (new lines) in HTML-Zeilenumbrüche (<br />) umwandelt

echo '<br><br>';


// Dateien zeilenweise auslesen mittels file()
$zitate2 = file('zitate.txt');
for ($i=0; $i < count($zitate2); $i++) {
  echo $i.": " .$zitate2[$i]. "<br><br>";
}
?>
