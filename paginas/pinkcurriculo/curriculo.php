<?php
$paginas = isset($_GET['pg']);
if ($paginas) {
    switch ($_GET['pg']){
        case 'inicial':
            include_once "paginas/inicial.php";
        break;
    }
} else {
    include_once "paginas/inicial.php";}


?>
























