<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/09/2018
 * Time: 03:34 PM
 */

?>
<!DOCTYPE html>
<html>
<head>
    <title>Nexura</title>
    <link rel="stylesheet" href="<?= URL;?>/Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL;?>/Assets/css/all.css">

    <link rel="stylesheet" href="<?= URL;?>/Assets/css/index.css">

</head>
<body>

<!-- MENU -->

<nav class="navbar navbar-expand-lg navbar-light bg-light container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/">Listar</a>
                    <a class="dropdown-item" href="/user/add">Agregar</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contratos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/contracts/index">Listar</a>
                    <a class="dropdown-item" href="/contracts/add">Agregar</a>
                </div>
            </li>
            <!--
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>

            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container">
    <br>




