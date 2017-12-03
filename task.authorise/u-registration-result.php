<?php
session_start();
$currentUser = $_SESSION['userMessage'];
$message = '';
/**
 * Logic
 */

/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>
<?php
require_once 'config.php'; // подключаем скрипт
?>

<h1 class="main-title">Sign In result</h1>
<section class="content-block centered ">
    <p class="content-block__text">Welcome, <em><?php echo $currentUser; ?>, now you are signed in</em></p>

</section>

<section class="content-block centered ">
    <a class="action-button" href="index.php">Back</a>
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
