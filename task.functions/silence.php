<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>
<?php
$currentURL = $_SERVER['REQUEST_URI'];

//form data
$n = $_POST["n"];

//result
$message = "Enter N";
$result = "";
$phrase = "Silence is golden";

if (isset($n) && ($n)) {
    if ($n > 0){
        for ($i = 1; $i <= $n; $i++) {
            $result .= $phrase . " ";
        }
        $message = "Ok!";
    } else {
        $message = "You entered wrong value, please enter number 1, 2, 3 etc.";
    }

}

?>
<h1 class="main-title">Silence is glden</h1>

<section class="content-block centered ">
    <a class="action-button" href="<?php echo $currentURL; ?>">Reset</a>
    <a class="action-button" href="<?php echo "/index.php"; ?>">Back</a>
</section>

<section class="content-block centered ">
    <p class="content-block__tile"><?php echo $message; ?></p>
</section>

<section class="content-block centered">
    <form name="form_booking" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" class="form"
          enctype="multipart/form-data">

        <div class="form__element">
            <p class="form-legend necessary">Qty</p>
            <label for="days">Enter Qty</label>
            <input id="days" name="n" placeholder="days" type="number" value=""/>
        </div>

        <div class="form__element form__element--actions">
            <input type="submit" value="GO"/>
            <input type="reset" value="clear"/>
            <input type="hidden" name="checking" value="true">
        </div>
    </form>
</section>
<section class="content-block centered">
    <p class="content-block__text">Output: <i><?php echo $result; ?></i></p>
</section>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
