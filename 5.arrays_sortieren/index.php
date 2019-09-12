<?php
echo "ARRAY SORTIEREN MIT sort()";
$mitarbeiter = ["Edo", "Enida", "Adis", "Saban"];
sort($mitarbeiter);
echo "<br>";
foreach ($mitarbeiter as $name) {
    echo "Mitarbeiter $name <br>";
}

echo "<br><br>";


echo "ARRAY SORTIERT MIT sort() durch eine for() schleife";
echo "<br>";
$namen = [
    "Edo Karani", 
    "Enida Picani", 
    "Adis Sincina", 
    "Saban Saulic"
];
$namenSort  = $namen;
$namenAsort = $namen;

sort($namenSort);
for ($i=0; $i < count($namenSort); $i++) { 
    echo '$nameSort['.$i.'] = '.$namenSort[$i]."<br>";
}


echo "<br>";

echo "ARRAY SORTIERT MIT asort() durch eine for() schleife";
echo "<br>";
asort($namenAsort);
for ($i=0; $i < count($namenAsort); $i++) { 
    echo '$nameSort['.$i.'] = '.$namenAsort[$i]."<br>";
}

?>