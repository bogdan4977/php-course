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
<section class="content-block centered ">
    <h1 class="content-block__title">file_get_content</h1>
    <?php/*
    $section = file_get_contents('http://sedovolosy.com/');
    echo $section;
    */?>
</section>
<section class="content-block centered ">
    <h1 class="content-block__title">file_put_content</h1>
    <?php/*
    function write($filename){
        $file = $filename;
        $current = file_get_contents($file);
        $current.="John Smith\n";
        file_put_contents($file,$current);
        echo "<p>". "You added text to $filename" . "</p>";
    }
    write("./people.txt");
    */?>
</section>
<section class="content-block centered ">
    <h1 class="content-block__title">file_put_content</h1>
    <?php
    $urls = array('https://www.google.com.ua', 'http://sedovolosy.com');

    foreach ($urls as $urlsitem){
        $output = curl_init();
        curl_setopt($output, CURLOPT_URL, $urlsitem);
        curl_setopt($output, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($output, CURLOPT_HEADER, 0);
        $out .= curl_exec($output);
        curl_close($output);
    }
    echo $out;
    ?>
</section>


<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
