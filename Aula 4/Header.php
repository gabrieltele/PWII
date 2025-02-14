<!DOCTYPE html>
<html lang="Pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de HTML, JS, CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Assets/Css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary bg-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img
                    src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-1/135/_Coin-1024.png" alt=""
                    width="25px">Pokemon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_pokemon_articuro-1024.png"
                                width="25px">
                            Pokemon
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> <img src="" alt="">Pikachu</a></li>
                            <li><a class="dropdown-item" href="#">
                                    <img src="https://cdn1.iconfinder.com/data/icons/pokemon-set/24/Charizard-1024.png"
                                        alt="" width="80px">Charizard</a></li>
                            <li><a class="dropdown-item" href="#"><img
                                        src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_venonat-1024.png"
                                        alt="" width="80px">Venonat</a></li>

                            <li><a class="dropdown-item" href="#"><img
                                        src="https://cdn2.iconfinder.com/data/icons/pokemon-flaticons/64/squirtle-pokemon-nintendo-video-game-gaming-gartoon-monster-1024.png"
                                        alt="" width="80px">Squirtle</a></li>
                            <li><a class="dropdown-item" href="#"><img
                                        src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_snorlax-1024.png"
                                        alt="" width="80px">Snorlax</a></li>
                            <li><a class="dropdown-item" href="#"><img
                                        src="https://cdn1.iconfinder.com/data/icons/pokemon-set/24/Clefairy-1024.png"
                                        alt="" width="80px">Clefairy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
