<?php
session_start();
include '../Model/Libro.php';

if (isset($_GET['quitapro'])) {
    $prod = $_GET['quitapro'];
    $libroAux=Libro::getLibroById($prod);
    $_SESSION['enCesta'][$prod]--;
    if ($_SESSION['enCesta'][$prod]==0) {
        unset($_SESSION['enCesta'][$prod]);
    }
    $_SESSION['cantidad']--;
    $_SESSION['total'] -= $libroAux->getPrecio();
    setcookie('cantidad', $_SESSION['cantidad'], time() + 24 * 3600);
    setcookie('total', $_SESSION['total'], time() + 24 * 3600);
    setcookie('cesta', serialize($_SESSION['enCesta']), time() + 24 * 3600);
}
header('Location:verContenidoCesta.php');
