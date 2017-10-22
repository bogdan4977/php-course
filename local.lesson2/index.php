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
            $var -=14;
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
            <em><?php echo ($hour . ':' . $minutes . ':' . $seconds);?></em>
        </p>
    </section>
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/main.js'></script>
</body>
</html>