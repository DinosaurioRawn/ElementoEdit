<?php

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'home';
echo "<br>";

switch ($var_getMenu) {
    case "home":
        require_once('./views/home.php');
        break;
    case "dinocositas":
        require_once('./views/dinocositas.php');
        break;
    case "login":
        require_once('./views/login.php');
        break;
    case "logout":
        $session_destroy = session_destroy();
        header("location: ./index.php?menu=home");
        break;
    case "bienvenido":
        require_once('./views/bienvenido.php');
        break;
    case "registro":
        require_once('./views/registro.php');
        break;
    case "acercade":
        require_once('./views/acercade.php');
        break;
    case "alumnos":
        include_once './model/alumnos.php';
        $sqlAlumnos = alumnos::consultar();

        include_once './views/viewalumnos.php';
        break;
    case "deletealumno":
        $_idalumnos = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once ('./model/alumnos.php');        
        $sqlAlumnos = alumnos::delete($_idalumnos);
        header("location: ./index.php?menu=alumnos");       
        break;
    default:
        require_once('./views/home.php');
}

?>

