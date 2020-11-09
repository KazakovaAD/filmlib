<?php
if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['bin-oper']))
{
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $oper = $_POST['bin-oper'];
    $ans = 0;
    switch ($oper)
    {
        case 'plus':
        {
            $ans = $num1 + $num2;
            break;
        }
        case 'minus':
        {
            $ans = $num1 - $num2;
            break;
        }
        case 'multi':
        {
            $ans = $num1 * $num2;
            break;
        }
        case 'division':
        {
            if($num2 == 0)
            {
                require ("view/calcError.php");
                die();
            }
            $ans = $num1 / $num2;
            break;
        }
    }
    require ("view/calcAnswerForm.php");
}
elseif (isset($_POST['number']) && isset($_POST['un-oper']))
{
    $num = $_POST['number'];
    $oper = $_POST['un-oper'];
    $ans = 0;
    switch ($oper)
    {
        case 'pow':
        {
            $ans = $num * $num;
            break;
        }
        case 'sqrt':
        {
            if ($num < 0)
            {
                require ("view/calcError.php");
                die();
            }
            $ans = sqrt($num);
            break;
        }
        case 'mod':
        {
            $ans = abs($num);
            break;
        }
    }
    require ("view/calcAnswerForm.php");
}
else
{
    require ("view/calcError.php");
}

