<?php 

$_GET["angka"];

for ($i = $_GET["angka"]; $i >= 1; $i--){
    for ($j = 1; $j <= $i; $j++){
        echo $j." ";
    }
    echo "<br>";

}

?>