
<div class="margin">
    <p> Выберите тип операции: </p>
    <button type="button" class="btn btn-outline-secondary uno_btn">Унарная</button>
    <button type="button" class="btn btn-outline-secondary bin_btn">Бинарная</button>
</div>
<form class="form-bin hide" style="padding-top: 10px" name="calc-form" method="post" action="\site\calcAnswer.php">
    <div class="form-label-group">
        <input type='number' name="number1"  placeholder="First number" required autofocus>
        <select name="bin-oper">
            <option value="plus">&plus;</option>
            <option value="minus">&minus;</option>
            <option value="multi">&times;</option>
            <option value="division">&divide;</option>
        </select>
        <input type='number' name="number2"  placeholder="Second number" required autofocus>
    </div>
    <button type="submit" class="btn btn-outline-secondary" style="margin-top: 10px">Отправить</button>
</form>
<form class="form-uno" style="padding-top: 10px" name="calc-form" method="post" action="\site\calcAnswer.php">
    <div class="form-label-group">
        <input type='number' name="number"  placeholder="Number" required autofocus>
        <select name="un-oper">
            <option value="pow">&sup2;</option>
            <option value="sqrt">&radic;</option>
            <option value="mod">||</option>
        </select>
    </div>
    <button type="submit" class="btn btn-outline-secondary" style="margin-top: 10px">Отправить</button>
</form>

<script type="text/javascript">
    $('.uno_btn').click(function(){
        if($('.form-uno').hasClass('hide'))
        {
            $('.form-bin').toggleClass('hide');
            $('.form-uno').toggleClass('hide');
        }
    });
    $('.bin_btn').click(function(){
        if($('.form-bin').hasClass('hide'))
        {
            $('.form-bin').toggleClass('hide');
            $('.form-uno').toggleClass('hide');
        }
    });
</script>