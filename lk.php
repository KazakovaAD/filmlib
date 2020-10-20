<!doctype html>

<?php
require "check_auth.php";
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Личный кабинет</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="/site/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/site/css/lk.css" rel="stylesheet">
</head>
<body>
<?php require 'header.php'; ?>
<main role="main">


    <div class="album py-5 bg-light">
        <div class="container margin">
            <h1>Мои фильмы</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm text">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/site/image/lk_1.jpg"><text x="50%" y="50%" fill="#eceeef" dy=".3em"><b>Криминальное чтиво</b></text></img>
                        <div class="card-body">
                            <p class="card-text">Двое бандитов Винсент Вега и Джулс Винфилд ведут философские беседы в перерывах между разборками и решением проблем с должниками криминального босса Марселласа Уоллеса.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Показать</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm text">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/site/image/lk_2.jpg"><text x="50%" y="50%" fill="#eceeef" dy=".3em"><b>Гладиатор</b></text></img>
                        <div class="card-body">
                            <p class="card-text">В великой Римской империи не было военачальника, равного генералу Максимусу. Но готовый сразиться с любым противником в честном бою, он оказался бессилен против вероломных придворных интриг. Генерала предали и приговорили к смерти. Чудом избежав гибели, Максимус становится гладиатором.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Показать</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm text">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/site/image/lk_3.jpg"><text x="50%" y="50%" fill="#eceeef" dy=".3em"><b>Джанго освобожденный</b></text></img>
                        <div class="card-body">
                            <p class="card-text">Эксцентричный охотник за головами, также известный как Дантист, промышляет отстрелом самых опасных преступников. Работенка пыльная, и без надежного помощника ему не обойтись. Освобождённый им раб по имени Джанго – прекрасная кандидатура.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Показать</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php require 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="/site/js/bootstrap.bundle.min.js" ></script></body>
</html>
