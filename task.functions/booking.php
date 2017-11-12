<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>
<?php
$currentURL = $_SERVER['REQUEST_URI'];
$cehking = $_POST["checking"];

//form data
$country = $_POST["country"];
$days = $_POST["days"];
$discount = $_POST["discount"];

//result
$resultPrice = 0;
$validate = "Full all nessesary fields";

function calcVacPrice($country, $days, $discount){
    $purePrice = $days * 400;
    if ($country == "egypt"){
        $purePrice *= 1.1;
    } elseif ($country == "italy"){
        $purePrice *= 1.2;
    }
    if ($discount == 1){
        $purePrice = $purePrice - ($purePrice * 0.05);
    }
    return $purePrice;
}

if (isset($country, $days) && $country && $days) {
    $resultPrice = calcVacPrice($country, $days, $discount);
    $validate = "Your trip has been calculated";
}


?>
<h1 class="main-title">Booking task</h1>

<section class="content-block centered ">
    <a class="action-button" href="<?php echo $currentURL; ?>">Reset</a>
    <a class="action-button" href="<?php echo "/index.php";?>">Back</a>
</section>

<section class="content-block centered">
    <form name="form_booking" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" class="form"
          enctype="multipart/form-data">

        <div class="form__element">
            <p class="form-legend necessary">Country</p>
            <label for="select-test">Choose a Country</label>
            <select name="country" id="select-test">
                <option selected="selected" disabled="disabled">Choose a country</option>
                <option value="turkey">Turkey</option>
                <option value="egypt">Egypt</option>
                <option value="italy">Italy</option>
            </select>
        </div>

        <div class="form__element">
            <p class="form-legend necessary">Days of vacation</p>
            <label for="days">Days</label>
            <input id="days" name="days" placeholder="days" type="number" value="<?php echo $days; ?>"/>
        </div>

        <div class="form__element form__element--checkbox form__element--column">
            <p class="form-legend">Discount</p>
            <label>
                <input id="" name="discount" value="1" type="checkbox"/>
                <i>discount</i>
            </label>
        </div>

        <div class="form__element form__element--actions">
            <input type="submit" value="Calculate price"/>
            <input type="reset" value="clear"/>
            <input type="hidden" name="checking" value="true">
        </div>
    </form>
</section>
<section class="content-block centered">
    <p class="content-block__text"><i><?php echo $validate; ?> *</i></p>
    <p class="content-block__text">Total booking price: <i><?php echo $resultPrice; ?> UAH</i></p>
</section>

<?php
/**
 * form
 */
?>



<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
