<?php
$zitate = file_get_contents('zitate.txt');
echo nl2br($zitate);
// nl2br()  welche Zeilenumbrüche (new lines) in HTML-Zeilenumbrüche (<br />) umwandelt
?>
