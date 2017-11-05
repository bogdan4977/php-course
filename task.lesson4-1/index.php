<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">Tasks lesson 4-1</h1>
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
<h2 class="main-title" title="Variables">Lesson 4 tasks</h2>
<section class="content-block centered">
    <h3 class="content-block__title"><strong>1</strong> - Simple numbers</h3>
    <?php
    $result_simple_number = "";
    for ($i = 1; $i <= 100; $i++) {
        if (($i % $i === 0) && ($i % 1 === 0)) {
            $result_simple_number.= "$i" . ", ";
        }
    }
    ?>
    <p class="content-block__text">Simple numbers in range from <i>1</i> to <i>100</i>: <br/>
        <?php echo $result_simple_number; ?>
    </p>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">Even number from <i>100</i> random numbers</h3>
    <?php
    //results
    $result_all_numbers = "";
    $result_even_numbers = "";
    $evenNumberArrayElements = "";

    //arrays
    $numbersArray = array();
    $evenNumberArray = array();


    for ($i = 0; $i < 100; $i++) {
        $number = mt_rand(0,100);
        $numbersArray[] = $number;
        $result_all_numbers .= $numbersArray[$i] . " ";
    }
    foreach ($numbersArray as $randon_number){
        if ($randon_number % 2 == 0){
            $evenNumberArray[] = $randon_number;
        } else {
            continue;
        }
        $evenNumberArrayElements = count($evenNumberArray);
        $result_even_numbers .= $randon_number . " ";
    }
    ?>

    <p class="content-block__text"><strong>All numbers</strong> <br/> <?php echo $result_all_numbers; ?></p>
    <p class="content-block__text"><strong>Even numbers</strong> <br/> <?php echo $result_even_numbers; ?></p>
    <p class="content-block__text"><strong>Even numbers QTY</strong> <br/> <?php echo $evenNumberArrayElements; ?></p>
</section>


<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
