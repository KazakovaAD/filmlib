<?php
$data = read_films();
$el = [];
?>
<div class="margin center">
    <h2>Добро пожаловать в личный кабинет администратора!</h2>
</div>

<div class="center">
    <h5>Что желаете сделать с контентом?</h5>
    <button type="button" class="btn btn-dark lg create-film">Добавить фильм</button>
    <button type="button" class="btn btn-dark lg read-film">Посмотреть список фильмов</button>
</div>
<script src="/site/js/validation.js"></script>
<div>

    <form class="form-margin form-create" name="cr-form" method="post" action="\site\logic\createFilms.php" onsubmit="return validateFilm();">
        <div class="form-row">
            <div>
                <label for="formGroupExampleInput">Название</label>
                <input type="text" class="form-control" name="filmName" id="filmName" required>
                <div class="invalid-feedback" id="nameError"></div>
            </div>
            <div>
                <label for="formGroupExampleInput2">Режиссер</label>
                <input type="text" class="form-control" name="filmDirector" id="filmDirector" required>
                <div class="invalid-feedback" id="directorError"></div>
            </div>
        </div>
        <div class="form-row">
            <div>
                <label for="formGroupExampleInput">Длительность</label>
                <input type="text" class="form-control" name="filmDuration" id="filmDuration" required>
                <div class="invalid-feedback" id="durationError"></div>
            </div>
            <div>
                <label for="formGroupExampleInput">Дата выхода</label>
                <input type="date" class="form-control" name="filmDate" id="filmDate" required>
                <div class="invalid-feedback" id="dateError"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-width">
                <label for="formGroupExampleInput">Описание</label>
                <textarea class="form-control" name="filmDescription" id="filmDescription" rows="5" required></textarea>
                <div class="invalid-feedback" id="descriptionError"></div>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-outline-secondary">Отправить</button>
            </div>
        </div>
    </form>
    <form class="form-margin form-read hide" name="cr-form">
        <?php foreach ($data as $el): ?>
        <div class="form-row container">
            <h2> <?= $el['name']?></h2>
            <dl class="row">
                <dt class="col-sm-3">Режиссер</dt>
                <dd class="col-sm-9"><?= $el['director']?></dd>

                <dt class="col-sm-3">Длительность</dt>
                <dd class="col-sm-9"><?= $el['duration']?></dd>

                <dt class="col-sm-3 text-truncate">Дата выхода</dt>
                <dd class="col-sm-9"><?= $el['date']?></dd>

                <dt class="col-sm-3">Описание</dt>
                <dd>
                    <div>
                        <p><?= $el['description']?></p>
                    </div>

                </dd>
            </dl>
        </div>
        <?php endforeach; ?>
    </form>
    <script src="/site/js/lk-hide-form.js"></script>

</div>
