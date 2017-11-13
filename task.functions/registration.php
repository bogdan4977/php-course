<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>
<?php
$currentURL = $_SERVER['REQUEST_URI'];

//form data
$name = $_POST["name"];
$pass = $_POST["pass"];
$email = $_POST["email"];

//result
$result = "Fill all fields marked with *";

if (isset($name)&&isset($pass)&&isset($email)){
    $result = "Fill felds: ";
    if (!$name){
        $result .= "name; ";
    }
    if (!$pass){
        $result .= "pass; ";
    }
    if (!$email){
        $result .= "email; ";
    }
    if ($name && $pass && $email) {
        $result = "registration successful" ;
    }
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
            <p class="form-legend necessary">Name</p>
            <label for="days">Enter Name</label>
            <input id="days" name="name" placeholder="name" type="text" value="<?php echo $name; ?>"/>
        </div>
        <div class="form__element">
            <p class="form-legend necessary">Pass</p>
            <label for="days">Enter Pass</label>
            <input id="days" name="pass" placeholder="pass" type="password" value="<?php echo $pass; ?>"/>
        </div>
        <div class="form__element">
            <p class="form-legend necessary">e-mail</p>
            <label for="days">Enter e-mail</label>
            <input id="days" name="email" placeholder="e-mail" type="email" value="<?php echo $email; ?>"/>
        </div>

        <div class="form__element form__element--actions">
            <input type="submit" value="GO"/>
            <input type="reset" value="clear"/>
            <input type="hidden" name="checking" value="true">
        </div>
    </form>
</section>
<section class="content-block centered">
    <p class="content-block__text">Message: <i><?php echo $result; ?></i></p>
</section>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
