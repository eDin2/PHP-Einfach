<?php
for ($i=0; $i < 20; $i++) { 
    if ($i == 13) {
        echo "nach der 13 geht es mit continue weiter! <br>";
        continue;
    }
    echo "$i, <br>";
}

echo "<br><br>";
 
for ($i=0; $i < 20; $i++) { 
    if ($i == 13) {
        echo "nach der 13 wird mit break gestopt! <br>";
        break;
    }
    echo "$i, <br>";
}

?>