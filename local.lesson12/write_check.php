<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">Write - check</h1>
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
<?php
//$filename = "test.txt";
//$content = " Lorem ipsum dolor sit amet,\n
//    consectetur adipisicing elit. Asperiores delectus dolores doloribus ducimus eaque eum, itaque magnam nam officiis omnis, pariatur perferendis perspiciatis placeat quae quaerat qui quo quod rerum, sunt suscipit\n
//     totam ullam voluptate voluptates! Ab deleniti, similique? Suscipit. \n";
//
//// Вначале давайте убедимся, что файл существует и доступен для записи.
//if (is_writable($filename)) {
//
//    // В нашем примере мы открываем $filename в режиме "дописать в конец". Таким образом, смещение установлено в конец файла и
//    // наш $somecontent допишется в конец при использовании fwrite().
//    $result = '';
//    $handle = fopen($filename, 'a');
//
//    if (!$handle) {
//        $result =  "Не могу открыть файл ($filename)";
//        exit;
//    }
//    // Записываем $content в наш открытый файл.
//    if (fwrite($handle, $content) === FALSE) {
//        $result = "Не могу произвести запись в файл ($filename)";
//        exit;
//    }
//    $result = "Ура! Записали ($content) в файл ($filename)";
//    fclose($handle);
//} else {
//    $result = "Файл $filename недоступен для записи";
//}
$dir = '';
$file1 = scandir(($dir));
$file2 = scandir($dir, 1);


?>

<section class="content - block centered ">
    <a class="action-button" href=" / ">Reset</a>
</section>
<h2 class="main-title" title="Variables">Functions Files</h2>
<section class="content-block centered ">
    <h2 class="content-block__title">My file</h2>
    <p class="content-block__text">Result: <?php //echo $result; ?></p>
    <p class="content-block__text">Scan: <pre><?php print_r($file1); ?></pre></p>
    <p class="content-block__text">Scan: <pre><?php print_r($file2); ?></pre></p>
</section>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
