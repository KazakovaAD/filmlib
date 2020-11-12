<?php require ("view/header.php"); ?>
<link href="/site/css/floating-labels.css" rel="stylesheet">
<form class="form-signin" name="login-form" method="post" action="\site\logic\auth.php">
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
    </div>

    <div class="form-label-group">
        <input type="text" name="login"  class="form-control" placeholder="Login" required autofocus>
        <label for="inputEmail">Логин</label>
    </div>

    <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Пароль</label>
    </div>


    <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
</form>
</body>
</html>
