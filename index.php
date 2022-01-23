<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP homework1</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

    <div class="title"> PHP HomeWork #2 </div>    

    <?php
    // Task 1
        echo 'Задание 1 <br />';

        $a = 0;

        if ($a === null) {
            echo 'Не верно';
        } else {
            echo 'Верно';
        }
        
        echo '<hr />';

    // Task 2
        echo 'Задание 2 <br />';

        $a = 123;

        $a = (string)$a;

        $a[1] = 0;

        echo $a;

        echo '<hr />';

    // Task 3
        echo 'Задание 3 <br />';

        $a = 1;
        $b = 3;

        if ($a <= 1 && $b >= 3) {
            echo $a + $b;
        } else {
            echo $a - $b;
        }

        echo '<hr />';

    // Task 4
        echo 'Задание 4 <br />';

        $a = 'bcde';

        if ($a[0] == 'a') {
            echo 'да';
        } else {
            echo 'нет';
        }

        echo '<hr />';

    // Task 5
        echo 'Задание 5 <br />';

        $a = 614456;

        $a = (string)$a;

        if ($a[0] + $a[1] + $a[2] == $a[3] + $a[4] + $a[5]) {
            echo 'да';
        } else {
            echo 'нет';
        }

        echo '<hr />';

    // Task 6
        echo 'Задание 6 <br />';

        $a = 150;

        switch(round($a / 30)) {
            case 1:
                echo '1';
                break;
            case 2:
                echo '2';
                break;
            case 3:
                echo '3';
                break;
            case 4:
                echo '4';
                break;
            case 5:
                echo '5';
                break;
            case 6:
                echo '6';
                break;
            case 7:
                echo '7';
                break;
            case 8:
                echo '8';
                break;
            case 9:
                echo '9';
                break;
            case 10:
                echo '10';
                break;
            case 11:
                echo '11';
                break;
            case 12:
                echo '12';
                break;
            default: echo 'Не верный диапазон введенных градусов';
        }

        echo '<hr />';

    // Task 7
        echo 'Задание 7 <br />';

        $a = 0;

        for ($i = 20; $i <= 45; $i++) {
            if($i % 5 == 0) {
                $a += $i;
            }
        }

        echo $a;

        echo '<hr />';
    
    // Task 8
        echo 'Задание 8 <br />';

        $a = 12345;

        $a = (string)$a;

        for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 0) {
                $a[$i - 1] = 0;
            }
        }

        echo $a;

        echo '<hr />';

    // Task 9
        echo 'Задание 9 <br />';

        $num = 1000;
        $i = 0;

        while ($num > 50) {
            $num /= 2;
            $i++;
        }

        echo $num . ' ' . $i;

        echo '<hr />';

    // Task 10
        echo 'Задание 10 <br />';

        $n = 5;

        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j <= $n; $j++) {
                echo '*';
            }
            echo '<br />';
        }

        echo '<hr />';

    ?>

</body>
</html>