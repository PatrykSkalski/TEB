<!---
Użytkownik podaje w formularzu ile ma ulubionych kolorów, wyświetla na tej samej stronie formularz z ilością pól tekstowych jaką użytkownika --->

<?php

require_once('./funkcje2.php');

 ?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

if(isset($_POST['ilosc'])){
  $ilosc = $_POST['ilosc'];
  $nazwa = 'color';
  input($nazwa, $ilosc);

}elseif (isset($_POST['button1'])) {
  echo "Ulubione kolory: ";
$ilosc=  $_POST['ilosc1'];
$colors = array();
$nazwa = 'color';

function addArray($ilosc,$nazwa,$tab){

  for ($i=0; $i <$ilosc; $i++){
    $x = $nazwa.$i;
    $y = $_POST["$x"];
    $colors[$i]=$y;
  }
}

addArray($ilosc, $nazwa,1);

foreach ($colors as $value) {
  echo "$value<br>";
}

}else {

     ?>

    <form method="post">
    <input type="number" name="ilosc"><br>
    <input type="submit" name="przycisk" value="Wyślij">

    </form>
    <?php
}
     ?>
  </body>
</head>
