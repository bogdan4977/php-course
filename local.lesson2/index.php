<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='description' content='php lesson 1'>
    <meta name='keywords' content=''>
    <meta name='robots' content='index, follow'>
    <meta name='author' content='sedovolosy.com'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP Lesson#2</title>
    <link href='https://fonts.googleapis.com/css?family=Michroma' rel='stylesheet'>
    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/all.css'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>lesson_2</title>
</head>
<body>
<div class='page-wrapper'>
    <h1 class="main-title">Lesson 2 tasks</h1>
    <?php /*
    <nav class='navigation centered'>
        <?php
        echo "<ul class='menu'>";
        echo "<li class='menu__item'><a href='#'>Home</a></li>";
        echo "<li class='menu__item'><a href='#'>Catalog</a></li>";
        echo "<li class='menu__item'><a href='#'>Blog</a></li>";
        echo "<li class='menu__item'><a href='#'>News</a></li>";
        echo "<li class='menu__item'><a href='#'>Who we Are</a></li>";
        echo "<li class='menu__item'><a href='#'>Facts</a></li>";
        echo "<li class='menu__item'><a href='#'>Contacts</a></li>";
        echo "</ul>"; ?>
    </nav>
    <section class="big-banner full-width">
        <p class="big-banner__text">faster</p>
        <p class="big-banner__text">better</p>
        <p class="big-banner__text">higher</p>
        <p class="big-banner__text">common</p>
    </section>
    <div class='columns centered'>
        <aside class="columns__sidebar columns__sidebar--left">
            <div class="side-banner">
                <div class="banner__text"><?php echo "Adverisment"; ?></div>
            </div>
        </aside>
        <section class='columns__content'>
            <p class='content-text'><?php echo "Hello PHP !!!"; ?></p>
            <p class='content-text'><?php echo "PHP's testting "; ?></p>
            <p class='content-text'><?php echo 'PHP\'s testting'; ?></p>
        </section>
    </div>
    */ ?>
    <!-- Tern -->
    <section class="content-block centered">
        <?php
        $mark = 5;
        $markLabel = "Your mark is ";
        ?>
        <h2 class="content-block__title" title="Ternar operation test">Ternar</h2>
        <p class="content-block__text">
            <?php echo $mark > 3 ? $markLabel . "<em>higher than common</em>" : $markLabel . "<em> lower than common</em>"; ?>
        </p>
    </section>
    <!-- #1 variables  -->
    <h2 class="main-title" title="Variables">#1 Variables</h2>
    <section class="content-block centered">
        <?php
        $a = 3;
        ?>
        <p class="content-block__text">var a = <em><?php echo $a; ?></em></p>
    </section>

    <section class="content-block centered">
        <!--calculations-->
        <?php
        $a = 10;
        $b = 2;
        ?>
        <p class="content-block__text">a = <em><?php echo $a; ?></em></p>
        <p class="content-block__text">b = <em><?php echo $b; ?></em></p>
        <p class="content-block__text">a + b = <em><?php echo($a + $b); ?></em></p>
        <p class="content-block__text">a - b = <em><?php echo($a - $b); ?></em></p>
        <p class="content-block__text">a * b = <em><?php echo($a * $b); ?></em></p>
        <p class="content-block__text">a / b = <em><?php echo($a / $b); ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $c = 15;
        $d = 2;
        //sum of c + d
        $result = ($c + $d);
        ?>
        <p class="content-block__text">c = <em><?php echo $c; ?></em></p>
        <p class="content-block__text">d = <em><?php echo $d; ?></em></p>
        <p class="content-block__text">$result = <em><?php echo $result; ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $a = 10;
        $b = 2;
        $c = 5;
        ?>
        <p class="content-block__text">a = <em><?php echo $a; ?></em></p>
        <p class="content-block__text">b = <em><?php echo $b; ?></em></p>
        <p class="content-block__text">c = <em><?php echo $c; ?></em></p>
        <p class="content-block__text">a + b + c = <em><?php echo($a + $b + $c); ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $a = 17;
        $b = 10;
        $c = ($a - $b);

        $d = 7;
        $result = $c + $d;
        ?>
        <p class="content-block__text">a = <em><?php echo $a; ?></em></p>
        <p class="content-block__text">b = <em><?php echo $b; ?></em></p>
        <p class="content-block__text">c = (a - b) = <em><?php echo $c; ?></em></p>
        <p class="content-block__text">d = <em><?php echo $d; ?></em></p>
        <p class="content-block__text">$result = (c + d) = <em><?php echo($a + $b + $c); ?></em></p>
    </section>
    <h2 class="main-title" title="Srtings">#2 Srtings</h2>
    <section class="content-block centered">
        <?php
        $text = "Hello, World!";
        ?>
        <p class="content-block__text">$text = <em><?php echo $text; ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $text1 = "Hello";
        $text2 = "World!";
        ?>
        <p class="content-block__text"><em><?php echo $text1 . ", " . $text2; ?></em></p>
    </section>
    <h2 class="main-title" title="Script seconds">#3 Script seconds</h2>
    <section class="content-block centered">
        <?php
        define("SECOND", 1);
        $secondInMinute = (SECOND * 60);
        $secondInHour = ($secondInMinute * 60);
        $secondInDay = ($secondInHour * 24);
        $secondInWeek = ($secondInDay * 7);
        $secondInMonth = ($secondInDay * 30);
        ?>
        <p class="content-block__text">Hour consist of <em><?php echo $secondInHour; ?></em> seconds</p>
        <p class="content-block__text">Day consist of <em><?php echo $secondInDay; ?></em> seconds</p>
        <p class="content-block__text">Week consist of <em><?php echo $secondInWeek; ?></em> seconds</p>
        <p class="content-block__text">Month(30day) consist of <em><?php echo $secondInMonth; ?></em> seconds</p>
    </section>
    <h2 class="main-title" title="Short forms">#4 Short forms</h2>
    <section class="content-block centered">
        <p class="content-block__text">Initial code :
            <?php
            //initial
            $var = 1;
            $var = $var + 12;
            $var = $var - 14;
            $var = $var * 5;
            $var = $var / 7;
            $var = $var + 1;
            $var = $var - 1;
            echo "<em>" . $var . "</em>";
            ?>
        </p>
        <p class="content-block__text">Rewrited code :
            <?php
            //rewrited
            $var = 1;
            $var += 12;
            $var -= 14;
            $var *= 5;
            $var /= 7;
            $var += 1;
            $var -= 1;
            echo "<em>" . $var . "</em>";
            ?>
        </p>
    </section>
    <h2 class="main-title" title="hour:minutes:seconds">#5 hours:minutes:seconds</h2>
    <section class="content-block centered">
        <?php
        $hour = "hour";
        $minutes = "minutes";
        $seconds = "seconds";
        ?>
        <p class="content-block__text">
            <em><?php echo($hour . ':' . $minutes . ':' . $seconds); ?></em>
        </p>
    </section>
    <h2 class="main-title" title="Concatination short form">#6 Concatination short form</h2>
    <section class="content-block centered">
        <p class="content-block__text">Initial code :
            <?php
            //initial
            $text = 'Я';
            $text = $text . ' хочу';
            $text = $text . ' знать';
            $text = $text . ' PHP!';
            echo "<em>" . $text . "</em>";
            ?>
        </p>
        <p class="content-block__text">Rewrited code :
            <?php
            //rewrited
            $text = 'Я';
            $text .= ' хочу';
            $text .= ' знать';
            $text .= ' PHP!';
            echo "<em>" . $text . "</em>";
            ?>
        </p>
    </section>
    <h2 class="main-title" title="$foo $bar">#7 $foo $bar</h2>
    <section class="content-block centered">
        <i class="task-text">Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10.
            Вывести число 10, используя только переменную $foo
        </i>
        <?php
        $foo = 'bar';
        $bar = 10;
        ?>
        <p class="content-block__text">Our number: <?php echo $$foo; ?></p>
    </section>
    <h2 class="main-title" title="Calculations">#8 Calculations</h2>
    <section class="content-block centered">
        <?php
        $num1 = 12;
        $num2 = 34.5;
        ?>
        <p class="content-block__text"><code>$num1 = 12; $num2 = 34.5;</code></p>
        <p class="content-block__text">num1 + num2 = <em><?php echo($num1 + $num2); ?></em></p>
        <p class="content-block__text">num1 * num2 = <em><?php echo($num1 * $num2); ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $num1 = 25;
        $num2 = 13;
        ?>
        <p class="content-block__text"><code>$num1 = 25; $num2 = 13;</code></p>
        <p class="content-block__text">num1^2 + num2^2 = <em><?php echo(pow($num1, 2) + pow($num2, 2)); ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $num1 = 19;
        $num2 = 37;
        $num3 = 67;
        $middleAr = ($num1 + $num2 + $num3) / 3;
        ?>
        <p class="content-block__text"><code>$num1 = 19; $num2 = 37; $num2 = 67; $middleAr = ($num1 + $num2 + $num3) /
                3;</code></p>
        <p class="content-block__text">$middleAr = <em><?php echo($middleAr); ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $x = 4;
        $y = 6;
        $z = 9;
        $expr = ($x + 1) - 2 * ($z - 2 * $x + $y);
        ?>
        <i class="task-text">Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10.
            Вывести число 10, используя только переменную $foo</i>
        <p class="content-block__text"><code>$x = 4; $y = 6; $z = 9; <br> $expr = ($x + 1) - 2*($z - 2*$x + $y);</code>
        </p>
        <p class="content-block__text">$expr = <em><?php echo($expr); ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $num1 = 79;
        $num2 = 45;
        $divideModule1 = $num1 % 3;
        $divideModule2 = $num2 % 3;

        $increaseNum1 = ($num1 * 1.3);
        $increaseNum2 = ($num2 * 2.2);
        ?>
        <i class="task-text">Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5. Дано число.
            Увеличьте его на 30%, на 120%.</i>
        <p class="content-block__text"><code>$num1 = 79; $num2 = 45; $divideModule1 = $num1 % 3; $divideModule2 = $num2
                % 3;</code></p>
        <p class="content-block__text"><code>$increaseNum1 = ($divideModule1 * 1.3); $increaseNum2 = ($divideModule2 *
                2.2);</code></p>
        <p class="content-block__text">$divideModule1 = <em><?php echo $divideModule1; ?></em></p>
        <p class="content-block__text">$divideModule2 = <em><?php echo $divideModule2; ?></em></p>
        <p class="content-block__text">$increaseNum1 = <em><?php echo $increaseNum1; ?></em></p>
        <p class="content-block__text">$increaseNum2 = <em><?php echo $increaseNum2; ?></em></p>
    </section>
    <section class="content-block centered">
        <?php
        $num1 = 34;
        $num2 = 89;
        //sum
        $sum = ($num1 * 0.4) + ($num2 * 1.2);
        ?>
        <i class="task-text">Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5. Дано число.
            Увеличьте его на 30%, на 120%.
        </i>
        <p class="content-block__text"><code>$num1 = 34; $num2 = 89; $sum = ($num1 * 0.4) + ($num2 * 1.2);</code></p>
        <p class="content-block__text">$sum = <em><?php echo $sum; ?></em></p>
    </section>
    <section class="content-block centered">
        <?php

        ?>
        <i class="task-text">Дано трехзначное числа. Найдите сумму его цифр</i>

    </section>
    <section class="content-block centered">
        <?php
        $num = 258;
        $newDigit = 0;
        //convert to sting
        $numToString = (string)$num;
        //change digit
        $numToString[1] = $newDigit;
        //get new number
        $getNewNumber = (int)$numToString;
        //reverse
        $getReverceNumber = (int)($numToString[2] . $numToString[1] . $numToString[0]);
        ?>
        <p class="content-block__text">
            <code>
                <br>
                <i>$num = 258;</i><br>
                <i>$newDigit = 0;</i><br>
                //convert to sting<br>
                <i>$numToString = (string)$num;</i><br>
                //chsange digit<br>
                <i>$numToString[1] = $newDigit;</i><br>
            </code>
        </p>
        <i class="task-text">Дано трехзначное число. Поменяйте среднюю цифру на ноль. Найдите число, полученное выписыванием в обратном порядке цифр данного трехзначного натурального числа.</i>
        <p class="content-block__text">Initial number = <em><?php echo $num; ?></em></p>
        <p class="content-block__text">Changed number = <em><?php echo (int)$numToString; ?></em></p>
        <p class="content-block__text">Changed direction = <em><?php echo (int)($numToString[2] . $numToString[1] . $numToString[0]); ?></em></p>
    </section>

        <?php
        echo "<form method=post action=index.php>";
        echo "<input type=text name=x>";
        echo "</br>";
        echo "<input type=text name=y>";
        echo "</br>";
        echo "<input type=radio name=test value=plus>+";
        echo "<input type=radio name=test value=minus>-";
        echo "<input type=radio name=test value=umnojit>*";
        echo "<input type=radio name=test value=delit>/";
        echo "</br>";
        echo "<input type=submit name=sabmit value=Cчитать>";
        echo "</form>";
        if (isset($_REQUEST['x'])&&
            (isset($_REQUEST['y'])&&
                (isset($_REQUEST['test']))))
        {switch ($_REQUEST['test'])
        {case "plus":
                echo $_REQUEST['x']+$_REQUEST['y'];
                break;
            case "minus":
                echo $_REQUEST['x']-$_REQUEST['y'];
                break;
            case "umnojit":
                echo $_REQUEST['x']*$_REQUEST['y'];
                break;
            case "delit":
                echo $_REQUEST['x']/$_REQUEST['y'];
                break;
            default:
                echo "error";
        }
        }
        ?>


</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/main.js'></script>
</body>
</html>