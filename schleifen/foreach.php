<?php
$user = [
    "Max",
    "Edo",
    "Enida",
    "Adis"
];

foreach ($user as $name) {
    echo $name."<br>";
}





/* ************** */
echo "<br><br>";
/* ************** */
$user = [
    "Max" => "Vertrieb",
    "Edo" => "Einkauf",
    "Enida" => "Buchhaltung",
    "Adis" => "Kunde"
];

foreach ($user as $name => $aufgabe) {
    echo "$name $aufgabe <br>";
}







/* ************** */
echo "<br><br>";
/* ************** */
$unternehmen = [
    "Vertrieb"      => ["Max", "Saban"],
    "Einkauf"       => ["Edo", "Serif"],
    "Buchhaltung"   => ["Enida", "Semsa"],
    "Kunde"         => ["Adis", "Safet"]
];

foreach ($unternehmen as $abteilung => $arbeiter) {
    echo "Mitarbeiter der Abteilung: $abteilung <br>";
    foreach ($arbeiter as $mitarbeiter) {
        echo "$mitarbeiter <br>";
    }
    echo "<br>";
}


?>