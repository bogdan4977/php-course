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

$resultArray = array();

//result
$result = "";

if (isset($n) && $n){
    for ($i = 1; $i < $n; $i++){
        $resultArray[] = 0;
        $resultArray[] = 1;
    }
}
foreach ($resultArray as $element){
    $result .= "$element - ";
}

?>
<h1 class="main-title">Registration Form</h1>

<section class="content-block centered ">
    <a class="action-button" href="<?php echo $currentURL; ?>">Reset</a>
    <a class="action-button" href="<?php echo "/index.php"; ?>">Back</a>
</section>

<section class="content-block centered">
    <form name="form_booking" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" class="form"
          enctype="multipart/form-data">

        <div class="form__element">
            <p class="form-legend necessary">array length</p>
            <label for="days">Enter array length</label>
            <input id="days" name="n" placeholder="array length" type="number" value="<?php echo $n; ?>"/>
        </div>
        <div class="form__element form__element--actions">
            <input type="submit" value="GO"/>
            <input type="reset" value="clear"/>
            <input type="hidden" name="checking" value="true">
        </div>
    </form>
</section>
<section class="content-block centered">
    <p class="content-block__text">Array: <i><?php echo $result; ?></i></p>
</section>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
