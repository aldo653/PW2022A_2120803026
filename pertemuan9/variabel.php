<?php 

$a = "hello";
$hello = "Hello World";

print $a."</br>";
print $hello."</br>";

//menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a
//isi variabel $a = hello. jadi, nanti akan menampilkan isi dari variabel $hello = hello world
print $$a. "</br>";

?>