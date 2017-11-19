<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>
<?php
require_once 'config.php'; // подключаем скрипт
?>
<?php
/**
 * Logic
*/
//get form data
//fields
$p_name = $_POST["p_name"];
$p_price = $_POST["p_price"];
$p_model = $_POST["p_model"];
$p_qty = $_POST["p_qty"];

$show_name = "";
$show_price = "";
$show_model = "";
$show_qty = "";

if (isset($p_name) && $p_name && isset($p_price) && isset($p_model) && isset($p_qty)){
    $show_name = $p_name;
    $show_price = $p_price;
    $show_model = $p_model;
    $show_qty = $p_qty;
} else {
    $show_name = 'Enter data';
}

?>

<h1 class="main-title">MySQL #2</h1>

<section class="content-block centered " style="background-color: #eeeeee; ">
    <a class="action-button" href="form_product.php">Reset</a>
    <a class="action-button" href="index.php">back</a>
</section>
<h2 class="main-title" title="Variables">Functions task</h2>

<section class="content-block centered ">
    <h2 class="content-block__title">Product data</h2>
    <form name="form_product" action="form_product.php" method="post" class="form" enctype="multipart/form-data">

        <div class="form__element">
            <label for="user-number">Name</label>
            <input id="user-number" name="p_name" placeholder="name" type="text" value=""/>
        </div>

        <div class="form__element">
            <label for="user-number">Price</label>
            <input id="user-number" name="p_price" placeholder="price" type="number" value="" step="any"/> UAH
        </div>

        <div class="form__element">
            <label for="user-number">Price</label>
            <input id="user-number" name="p_model" placeholder="model" type="text" value=""/>
        </div>

        <div class="form__element">
            <label for="user-number">QTY</label>
            <input id="user-number" name="p_qty" placeholder="qty" type="number" value="" step="any"/>
        </div>

        <div class="form__element form__element--actions">
            <input type="submit" value="add"/>
            <input type="reset" value="clear"/>
        </div>
    </form>
    <p class="content-block__text">Name : <?php echo $show_name ?></p>
    <p class="content-block__text">Price : <?php echo $show_price ?></p>
    <p class="content-block__text">Model : <?php echo $show_model ?></p>
    <p class="content-block__text">Qty : <?php echo $show_qty ?></p>
</section>
<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
