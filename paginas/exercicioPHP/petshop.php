<!-- conteudo pg -->
<?php

include_once 'paginas/includes/header.php';

$paginas = isset($_GET['pg']);
if ($paginas) {
    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/inicial.php";
            break;
        case 'sobre':
            include_once "paginas/sobre.php";
            break;
        case 'produtos':
            include_once "paginas/produtos.php";
            break;
        case 'contato':
            include_once "paginas/contato.php";
            break; 
    }
} else {
    include_once "paginas/inicial.php";
}

include_once 'paginas/includes/footer.php';
?>
<!-- fim conteudo pg -->












<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<!-- jQuery -->
<script src="public/js/jquery.js"></script>
<script src="public/css/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="public/css/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>