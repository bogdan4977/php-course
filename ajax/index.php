<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">AJAX</h1>
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
<?php ?>


<section class="content-block centered ">
    <a class="action-button" href="/">Reset</a>
</section>

<section class="content-block centered" id="target">
    <h3 class="content-block__title">Script</h3>
    <p class="content-block__text" id="loadev"></p>
    <p class="content-block__text">
        <button type="button" id="load">Click</button>
    </p>
</section>

<section class="content-block centered" >
    <h3 class="content-block__title">Box 1</h3>
    <p class="content-block__text" id="box-1"></p>
</section>
<section class="content-block centered" >
    <h3 class="content-block__title">Box 2</h3>
    <p class="content-block__text" id="box-2"></p>
</section>
<section class="content-block centered" id="box-2">
    <p class="content-block__text">
        <button type="button" id="btn-1">btn-1</button>
        <button type="button" id="btn-2">btn-2</button>
    </p>
</section>
<section class="content-block centered">
    <p class="content-block__text" id="result">

    </p>
</section>



<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
