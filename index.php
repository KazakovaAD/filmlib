<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Film library</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
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
    <link href="/site/css/carousel.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">FilmLibrary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/site/news.php">Новинки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Популярные</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/site/lk.php">Личный кабинет</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </div>
    </nav>
</header>

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" src="/site/image/50os.jpeg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>"Мистер Грей ждет вас"</h1>
                        <p>Анастейша Стил — скромная студентка, живущая вместе с близкой подругой-сокурсницей Кейт. За неделю до выпускного в университете Анастейша, по просьбе заболевшей Кейт заменить её, берёт интервью у молодого красавца-миллиардера Кристиана Грея.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Подробнее</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" src="/site/image/spartac.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>"Некоторые легенды написаны кровью"</h1>
                        <p>Спартака разлучили с любовью всей его жизни и заставили выходить на арену, где смерть – лучшее развлечение для толпы. Спартак должен бороться за выживание, подружиться с врагами, и усвоить политику нового мира жестокости, секса и славы. Его будут соблазнять властью и изводить местью. Но его страсть даст ему силы преодолеть все испытания в этой истории о смерти, чести и стойкости.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Подробнее</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" src="/site/image/witcher.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>"У Меча Предназначения два острия. Одно из них — ты."</h1>
                        <p>Ведьмак Геральт, мутант и убийца чудовищ, на своей верной лошади по кличке Плотва путешествует по Континенту. За тугой мешочек чеканных монет этот мужчина избавит вас от всякой настырной нечисти - хоть от чудищ болотных, оборотней и даже заколдованных принцесс.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Подробнее</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <h1>Новинки</h1>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="bd-placeholder-img" width="100%" height="50%" src="/site/image/new1.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
                <h2>Зов предков</h2>
                <p>История Бака, дружелюбного пса, чья размеренная домашняя жизнь перевернулась с ног на голову во времена золотой лихорадки в 1880-х, когда его вырвали из дома в Калифорнии и перевезли в дикую и холодную Аляску. Будучи новичком в упряжке почтовой службы, а впоследствии лидером, Бак попадает в невероятное приключение, находит свое место в мире и становится хозяином своей жизни.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img" width="100%" height="50%" src="/site/image/new2.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
                <h2>Соник в кино</h2>
                <p>Отвязный ярко-синий ёжик Соник из параллельного мира вместе с новообретённым лучшим другом-человеком по имени Том знакомится со сложностями жизни на Земле и противостоит злодейскому доктору Роботнику, который хочет пленить Соника и использовать его безграничные суперсилы для завоевания мирового господства.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img" width="100%" height="50%" src="/site/image/new3.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>                <h2>Довод</h2>
                <p>После теракта в киевском оперном театре агент ЦРУ объединяется с британской разведкой, чтобы противостоять русскому олигарху, который сколотил состояние на торговле оружием. Для этого агенты используют инверсию времени, заставляющую уже произошедшие события идти вспять.</p>
            </div><!-- /.col-lg-4 -->
            <p><a class="btn btn-secondary buttom-margin" href="/site/news.php" role="button">Показать все</a></p>
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">
        <h1>Популярное</h1>
        <div class="row featurette">
            <div class="col-md-7">

                <h2 class="featurette-heading">Апгрейд</h2>
                <p class="lead">В ближайшем будущем разнообразные технологии участвуют во всех аспектах человеческой жизни. Но в этом технологичном мире Грей - один из немногих людей, кто любит работать руками. Он восстанавливает и чинит старые автомобили. Однажды, возвращаясь от клиента, Грей с женой попадают в аварию, а после - в руки банды отморозков, в результате чего женщина погибает, а Грей оказывается парализованным ниже шеи. Тот самый богатый клиент предлагает несчастному поставить экспериментальный имплант Stem, который может полностью восстановить подвижность.</p>
            </div>
            <div class="col-md-5">
                <img width="100%" height="120%" src="/site/image/pop1.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500" style="padding: 130px 0px"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Расправь крылья</h2>
                <p class="lead">Подросток Тома навещает во время отдыха своего отца Кристиана, чудаковатого орнитолога. Но для юноши, увлеченного гаджетами и играми, разведение диких гусей во французской деревне и эксперименты отца наводят лишь тоску. Однако все меняется, когда Тома решает спасти исчезающий вид диких гусей и отправляется в воодушевляющее путешествие с «небесными ангелами», как их называет Кристиан.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img width="100%" height="110%" src="/site/image/pop2.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500" style="padding: 130px 0px"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Последний охотник на ведьм</h2>
                <p class="lead">Современный мир скрывает множество секретов, но самым удивительным из них является то, что ведьмы до сих пор живут среди нас. Это злобные сверхъестественные существа, чья цель - наслать на мир смертоносную чуму. Армии охотников на ведьм сражались с ними на протяжении многих веков. В наши дни остался всего лишь один охотник на ведьм, Колдер, которому однажды удалось убить всемогущую королеву ведьм. Но Колдер еще не знает, что королева воскресла и жаждет отомстить своему убийце.</p>
            </div>
            <div class="col-md-5">
                <img width="100%" height="110%" src="/site/image/pop3.jpg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500" style="padding: 130px 0px"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 Казакова Анастасия &middot; </p>
    </footer>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="/site/js/bootstrap.bundle.min.js"></script></body>
</html>
