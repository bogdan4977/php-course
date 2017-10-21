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
    */?>
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
    <section class="content-block centered">
        <p class="content-block__text"></p>
    </section>
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/main.js'></script>
</body>
</html>