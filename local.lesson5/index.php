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
<h2 class="main-title" title="Variables">Lesson 5</h2>
<section class="content-block centered form-box">
    <?php /*
    function testFunction($n)
    {
        return $n * $n;
    }

    $pow = testFunction(2);
    $pow2 = testFunction(45);


    function newFunction($name, $surname = "Ivanovich")
    {
        echo "Привет $name $surname !!!";
        return 1;
    }

    $name = "Nick";

    function foo(&$my_color)
    {
        // теперь параметр будет ссылаться на оригинальное значение
        $my_color = 'синий';
        // присваиваем новое значение
    }

    $color = 'красный';
    foo($color);
    echo $color;    // выведет: синий
    */ ?>

    <?php
    echo zerg();
    function zerg()
    {
        global $a;
        global $b;
        $a = 10;
        $a = 5;
        return $a * $b;
    }

    $a = 51;
    $b = 100;

    ?>
    <p class="content-block__text"><?php echo zerg(); ?></p>
    <p class="content-block__text"><?php echo $a; ?></p>
    <p class="content-block__text"><?php echo $b; ?></p>

    <?php /* require_once 'form.php';*/ ?>

</section>
<section class="content-block centered form-box">
    <h2 class="content-block__title">Static variables</h2>
    <?php
    function selfcount(){
        static $count = 0;
        $count++;
        echo $count;
    }

    for ($i = 0; $i < 5; $i++){
        selfcount();
    }
    ?>
</section>
<section class="content-block centered form-box">
    <h2 class="content-block__title">Recursion function</h2>
    <?php
        
    ?>
</section>
<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
