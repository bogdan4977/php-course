<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>
<?php
require_once 'config.php'; // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$query = "SELECT * FROM oc_category";
$result = mysqli_query($link, $query) or
die("Error" . mysqli_error($link));

if($result){
    $rows = mysqli_num_rows($result); //кол получ строк
    echo "<table><tr><th>Id</th><th>MODEL</th><th>Manufacturer</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_assoc($result);
        echo "<pre>";
        print_r($row);
        echo "</pre>";

    }
    echo "</table>";


    echo "Выполнение запроса прошло успешно";
}
// закрываем подключение
mysqli_close($link);

?>
<h1 class="main-title">MySQL</h1>
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
    <h2 class="content-block__title">MySQL</h2>
    <?php

    ?>
    <?php /* require_once 'form.php';*/ ?>
    <p class="content-block__text"></p>
    <p class="content-block__text"></p>
</section>
<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
