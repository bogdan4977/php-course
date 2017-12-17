<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">Regular definitions</h1>
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

?>

<section class="content-block centered ">
    <a class="action-button" href="/">Reset</a>
</section>

<section class="content-block centered">
    <h3 class="content-block__title">Ternar operation</h3>
    <?php
    $a = 34;
    $ternA = $a % 2 !== 0 ? 'a  - не чётное' : 'а - чётное';
    $status = true;
    $ternStatus = $status === true ? 'Hello!' : 'error!';
    ?>
    <p class="content-block__text">a = <?php echo $a; ?></p>
    <p class="content-block__text"><?php echo $ternA; ?></p>
    <hr>
    <p class="content-block__text">satus = <?php echo $status; ?></p>
    <p class="content-block__text"><?php echo $ternStatus; ?></p>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">if else</h3>
    <?php
    $ternStatusResult = '';
    if ($status === true) {
        $ternStatusResult = 'Hello!';
    } else {
        $ternStatusResult = 'error!';
    }
    ?>
    <p class="content-block__text"><?php echo $ternStatusResult; ?></p>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">While</h3>
    <?php
    $result = '';
    $counter = 0;
    while ($counter <= 9) {
        echo $counter . ", ";
        $counter++;
    }
    /*do {
        echo $counter . ", ";
        $counter ++ ;
    } while ($counter <= 9);*/
    ?>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">For</h3>
    <?php
    for ($forCounter = 0; $forCounter <= 9; $forCounter++) {
        echo $forCounter . ", ";
    }
    ?>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">Foreach</h3>
    <?php
    $arrayIndex = array(10, 20, 3, 4, 7, 'test', 'new', 13);
    $arrayAssosiate = array(
        'color' => 'red',
        'background' => 'blue',
        'name' => 'Vasia',
        'number' => 2
    );
    foreach ($arrayIndex as $value) {
        echo $value . ", ";
    }
    echo '<hr>';
    foreach ($arrayAssosiate as $parametr => $option){
        echo $parametr . ': ' . "<em>$option</em>" . '<br/>';
    }
    ?>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">function</h3>
    <?php

    function customPow($userNumber, $degree){
        $result = pow($userNumber, $degree);
        return $result;
    }
    ?>
    <p class="content-block__text">fuction result = <?php echo customPow(3, 2)?></p>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">recurtion</h3>
    <?php
    $result = '';
    function recurtion($recursionNumber){
        global $result;
        if ($recursionNumber <= 0){
            return 0;
        } else {
           $result .= "$recursionNumber + ";
           return $recursionNumber + recurtion($recursionNumber - 1);
        }
    }
    ?>
    <p class="content-block__text">fuction result = <?php echo recurtion(2);?></p>
    <p class="content-block__text">fuction result = <?php echo $result;?></p>
</section>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
