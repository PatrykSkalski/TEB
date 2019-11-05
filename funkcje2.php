<?php

function input($name, $count){
echo "Ulubione kolory: ";
echo "<form method=\"post\">";
for ($i=0; $i <$count; $i++) {
echo "<input type=\"text\"name=\"$name$i\"><br><br>";
}
echo "<input type=\"hidden\" name=\"ilosc1\" value=\"$count\">";
echo "<br><input type=\"submit\"name=\"button1\"value=\"Zatwierdź\">";
echo "</form>";
}
 ?>
