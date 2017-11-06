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
            $result_simple_number .= "$i" . ", ";
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
        $number = mt_rand(0, 100);
        $numbersArray[] = $number;
        $result_all_numbers .= $numbersArray[$i] . " ";
    }
    foreach ($numbersArray as $random_number) {
        if ($random_number % 2 == 0) {
            $evenNumberArray[] = $random_number;
        } else {
            continue;
        }
        $evenNumberArrayElements = count($evenNumberArray);
        $result_even_numbers .= $random_number . " ";
    }
    ?>

    <p class="content-block__text"><strong>All numbers</strong> <br/> <?php echo $result_all_numbers; ?></p>
    <p class="content-block__text"><strong>Even numbers</strong> <br/> <?php echo $result_even_numbers; ?></p>
    <p class="content-block__text"><strong>Even numbers QTY</strong> <br/> <?php echo $evenNumberArrayElements; ?></p>
</section>
<section class="content-block centered">
    <h3 class="content-block__title">Generation Qty</h3>
    <?php
    $result_qty = "";
    $random_numbers_array = array();
    $check_sum = 0;

    $qty_1 = 0;
    $qty_2 = 0;
    $qty_3 = 0;
    $qty_4 = 0;
    $qty_5 = 0;

    for ($i = 0; $i < 100; $i++) {
        $random_number_v2 = mt_rand(1, 5);
        $random_numbers_array[] = $random_number_v2;
    }
    foreach ($random_numbers_array as $value) {
        switch ($value) {
            case 1 :
                $qty_1 += 1;
                break;
            case 2:
                $qty_2 += 1;
                break;
            case 3:
                $qty_3 += 1;
                break;
            case 4:
                $qty_4 += 1;
                break;
            case 5:
                $qty_5 += 1;
                break;
        }
    }
    $check_sum = $qty_1 + $qty_2 + $qty_3 + $qty_4 + $qty_5;

    ?>
    <p class="content-block__text">number <i>1</i> occurred <strong><?php echo $qty_1; ?></strong> times</p>
    <p class="content-block__text">number <i>2</i> occurred <strong><?php echo $qty_2; ?></strong> times</p>
    <p class="content-block__text">number <i>3</i> occurred <strong><?php echo $qty_3; ?></strong> times</p>
    <p class="content-block__text">number <i>4</i> occurred <strong><?php echo $qty_4; ?></strong> times</p>
    <p class="content-block__text">number <i>5</i> occurred <strong><?php echo $qty_5; ?></strong> times</p>
    <p class="content-block__text">check sum = <i><?php echo $check_sum; ?></i></p>
    <p class="content-block__text"><?php print_r($random_numbers_array); ?></p>

</section>
<section class="content-block centered">
    <h3 class="content-block__title">Color table</h3>
    <?php
    $r = 0;
    $g = 0;
    $b = 0;
    $t = 0.2;
    echo '<table>';
    for ($row = 0; $row < 3; $row++) {
        echo '<tr>';
        for ($cell = 0; $cell < 5; $cell++) {

            if ($cell % 2 == 0) {
                $r = mt_rand(0, 256);
                $g = mt_rand(0, 256);
                $b = mt_rand(0, 256);
                $t = mt_rand(0.1, 1);
            }
            echo "<td style='background-color: rgba($r, $g, $b, $t); color: #fff;'>;)</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</section>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
