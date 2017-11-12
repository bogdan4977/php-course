<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">Functions lesson#5</h1>
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
<h2 class="main-title" title="Variables">Functions task</h2>
<section class="content-block centered form-box">

</section>

<section class="content-block centered ">
    <h2 class="content-block__title">Recursion function</h2>
    <p class="content-block__text"><code>С помощью рекурсивной функции посчитать сумму чисел от введенного в форму и до
            1.
            Пример: если ввели в форму 5, то должны получить значение 5+4+3+2+1.</code></p>
    <?php
    $userNumber = $_POST["user_number"];
    $answerMessage = "";
    $actioText = "";

    function calcSum($inputValue)
    {
        global $actioText;
        if ($inputValue <= 0) {
            return 0;
        } else {
            // check is it last or not value
            if ($inputValue > 1) {
                $actioText .= "$inputValue + ";
            } else {
                $actioText .= "$inputValue";
            }
            // recursion
            return $inputValue + calcSum($inputValue - 1);
        }
    }

    // run function
    if (isset($userNumber) && ($userNumber)) {
        $answerMessage = calcSum($userNumber);
    } else {
        $actioText = "Action does not exist";
        $answerMessage = "Enter number, please!";
    }
    ?>
    <?php require_once 'form.php'; ?>
    <p class="content-block__text"><i>Action :</i> <?php echo $actioText; ?></p>
    <p class="content-block__text"><i>Result :</i> <?php echo $answerMessage; ?></p>
</section>
<h2 class="main-title" title="Variables">TASKS FROM DOC</h2>
<section class="content-block centered ">
    <?php
    $currentURL = $_SERVER['REQUEST_URI'];
    ?>
    <h3 class="content-block__title">Tasks links</h3>
    <nav class='navigation centered'>
        <ul class='menu'>
            <li class='menu__item'><a href="<?php echo $currentURL . 'booking.php' ?>">Booking task</a></li>
            <li class='menu__item'><a href="<?php echo $currentURL . 'silence.php' ?>">Silence is gilden</a></li>
        </ul>
    </nav>
</section>
<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
