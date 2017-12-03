<?php
session_start();

/**
 * 1. Создать форму записи в базу именю юзера и пароль - пароль записать м md5
 * 2. Проверить форму Создать сессионную переменную - переменная authorize = 1
 * 3. Проверка есть ли authorize +) Выводим имя -) редирект на регистрацию
*/
?>
<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>


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
<h2 class="main-title" title="Variables">Choose an action please!</h2>
<section class="content-block centered ">
    <a class="action-button" href="u-signin.php">Sign In</a>
    <a class="action-button" href="u-registration.php">Register</a>
</section>

<section class="content-block centered ">
    <a class="action-button" href="/">Reset</a>
</section>
<?php if($_SESSION['authorized'] == 1){ ?>
    <section class="account-panel">
        <p class="account-panel__message">Welcome, <em><?php echo $_SESSION['userMessage']; ?></em></p>
        <a class="account-panel__action" href="close.php">sign out</a>
    </section>
<?php } ?>
<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>


