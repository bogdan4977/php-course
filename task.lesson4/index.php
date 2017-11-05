<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">Tasks lesson 4</h1>
<?php /*
    <!-- page layout -->
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
<section class="content-block centered ">
    <a class="action-button" href="/">Reset</a>
</section>
<h2 class="main-title" title="Variables">Lesson 4 tasks</h2>
<section class="content-block centered form-box">
    <?php
    $result_message = '';
    $user_number = $_POST['user_number'];
    $class_checked = 'hide'; /*options: hide, show*/
    $flag = true; /*options: true, false*/

    if (isset($user_number) && ($user_number)) {
        $computer_number = mt_rand(5, 8);

        if ($user_number == $computer_number) {
            $result_message = 'Good job - you guess it';
            $flag = false;
        } elseif ($user_number > 8) {
            $result_message = 'Number is too hight';
            $flag = false;
        } elseif ($user_number < 5) {
            $result_message = 'Number is too small';
            $flag = false;
        } else {
            $result_message = 'In the range but not exact, try again!';
            $flag = true;
        }

    } else {
        $result_message = 'You didn\'t choose a number - choose it!';
    }
    ?>
    <h3 class="content-block__title">I've made a guess - this is <i>integer</i> from <i>5</i> to <i>8</i> try to guess
        what exactly? ;)</h3>
    <h4 class="content-block__title" style="color:darkred"><?php echo $result_message; ?></h4>

    <?php if ($flag == false) { ?>
        <div class="centered text-centered">
            <a class="action-button" href="/">Try again !!!</a>
        </div>
    <?php } ?>

    <?php
    if ($flag == true) {
        require_once 'form.php';
    }
    ?>

</section>
<?php /*
<h2 class="main-title" title="Variables">Other tasks for lesson 4</h2>
<section class="content-block centered">
    <h3 class="content-block__title">Colors</h3>
    <?php
    $b = 0;
    $c = 0;
    echo "<table border='1'>";
    for ($a = 0; $a < 256; $a += 51) {
        echo "<tr>";

        for ($b = 0; $b < 256; $b += 51) {
            for ($c = 0; $c < 256; $c += 51) {
                echo "<td style=background-color:rgb($a,$b,$c);>&#32;</td>";
            }
        }
    }
    echo "</tr>";
    echo "</table>";
    ?>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">Собрать массив из чисел, кратных трем. <br/>
        Вывести на экран элементы этого массива, которые кратны 5.</h3>
    <?php
    $mass = array();
    for ($x = 0; $x < 100; $x++) {
        if ($x % 3 == 0) {
            $mass[] = $x;
        }
    }
    foreach ($mass as $numbers)
        if ($numbers % 5 == 0) echo $numbers . '</br>';

    ?>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">Continue</h3>
    <?php
    $x = 0;
    while ($x++ < 5) {
        if ($x == 3) continue;
        echo "<b>Итерация $x</b><br>";
    }
    // Цикл прервется только на третьей итерации
    ?>
</section>
 */ ?>


<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
