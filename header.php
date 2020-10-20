<?php require "auth.php"?>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/site/index.php">FilmLibrary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($_SERVER['REQUEST_URI'] == "/site/index.php") echo "active";?>">
                    <a class="nav-link" href="/site/index.php">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/site/news.php") echo "active";?>" href="/site/news.php">Новинки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Популярные</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/site/lk.php") echo "active";?>" href="/site/lk.php">Личный кабинет</a>
                </li>
            </ul>
            <a class="navbar-brand" href="/site/lk.php?action=logout"><?php if(isset($_COOKIE['UID'])) echo "Выход"; else echo "Вход";?> <img width="30px" height="30px" src="/site/image/wind.png"></img></a>;

            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </div>
    </nav>
</header>