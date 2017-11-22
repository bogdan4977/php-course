<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">Functions lesson#11</h1>
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
$multiArray = array(
    "robot-1" => array(
        "intelect" => 90,
        "speed" => 30,
        "armor" => 55
    ),
    "robot-2" => array(
        "intelect" => 35,
        "speed" => 75,
        "armor" => 39
    )
);
$robotText = "";
$parameterText = "";

foreach ($multiArray as $robot => $data){
    $robotText .= "$robot, ";
    foreach ($data as $parameter => $status){
        $parameterText .= "$status, ";
    }
}

$indexArray = array("lemon", "orange", "banana", "apple");
asort($indexArray);
krsort($indexArray);

$users = array(
    array( 'id'=>10, 'name'=>'Фёдор' ),
    array( 'id'=>2, 'name'=>'Иван' ),
    array( 'id'=>4, 'name'=>'Александр' ),
    array( 'id'=>3, 'name'=>'Пётр', ),
    array( 'id'=>7, 'name'=>'Александр' )
);

function superSort($a, $b){
    if($a['id'] == $b['id']){
        return 0;
    } else {
        return ($a['id'] > $b['id']) ? -1 : 1;
    }
};
//sort
usort($users, 'superSort');


?>

<section class="content-block centered ">
    <a class="action-button" href="/">Reset</a>
</section>
<h2 class="main-title" title="Variables">Functions task</h2>


<section class="content-block centered ">
    <h2 class="content-block__title">Array multilevel</h2>
    <p class="content-block__text"><?php echo $robotText ;?></p>
    <p class="content-block__text"><?php echo $parameterText ;?></p>
    <p class="content-block__text"><pre><?php print_r($indexArray);?></pre></p>
    <?php //require_once 'form.php'; ?>
    <p class="content-block__text"><i>Action :</i> <?php echo $actioText; ?></p>
    <p class="content-block__text"><i>Result :</i> <?php echo $answerMessage; ?></p>
</section>
<section class="content-block centered">
    <h2 class="content-block__title">Usort</h2>
    <p class="content-block__text"><pre><?php  print_r($users); ?></pre></p>
</section>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
