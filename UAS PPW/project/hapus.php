<?php 
require 'function.php';

$id = $_GET["id"];

if (hapus($id) > 0){
    echo "
    <script>
        alert('Data Deleted is Success !');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data Deleted is Failed !');
        document.location.href = 'index.php';
    </script>
    ";
}

?>