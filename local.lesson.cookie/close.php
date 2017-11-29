<?php
session_start();
$_SESSION['count'] = array();
session_destroy();
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">Functions lesson#12</h1>
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
    <a class="action-button" href="index.php">index.php</a>
</section>
<h2 class="main-title" title="Variables">Session-2 Close</h2>
<section class="content-block centered ">
    <h3 class="content-block__title">Session Count</h3>
    <p class="content-block__text">Your session expired</p>
</section>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
