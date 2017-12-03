<?php
session_start();
require_once 'config.php'; // connection to db
/**
 * Logic
 */
//get form data
//fields
$name = $_POST['name'];
$pass = $_POST['pass'];

$message = "";

if (isset($name) && $name && isset($pass) && ($pass)) {
    /*database connect*/
    $connect = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($connect));

    /*escapes special characters*/
    $data_name = htmlentities(mysqli_real_escape_string($connect, ($name)));
    $data_pass = md5(htmlentities(mysqli_real_escape_string($connect, $pass)));

    /*query*/
    $dbPass = "password";
    $queryPass = "SELECT `$dbPass` FROM Users WHERE (`name` = '$data_name')";
    $getUserPass = mysqli_query($connect, $queryPass) or die("Error" . mysqli_error($connect));
    /*get result*/

    if ($getUserPass) {
//        while($row = mysqli_fetch_assoc($getUserPass)){
//            print_r($row);
//        }
        $passRow = mysqli_fetch_assoc($getUserPass);
        $resultPass = $passRow[$dbPass];
        //check pass
        if ($resultPass === $data_pass) {
            if (!isset($_SESSION['authorized'])) {
                $_SESSION['authorized'] = 1;
                $_SESSION['userMessage'] = "$data_name";
                header('HTTP/1.1 301 OK');
                header("Location: u-registration-result.php");
            } else {
                $message = "You are already signed in as $data_name";
            }

        } else {
            $message = "You entered invalid name or password";
        }
    }

    /*close connection*/
    mysqli_close($connect);

} else {
    if (!isset($_SESSION['authorized'])){
        $message = "Enter your data please!";
    } else {
        $message = "You are already signed in as " . $_SESSION['userMessage'];
    }

}
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>
<?php

?>

<h1 class="main-title">Sign In form</h1>
<section class="content-block centered ">
    <form name="form_guess" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" class="form"
          enctype="multipart/form-data">
        <div class="form__element">
            <label for="user-name">Enter name</label>
            <input id="user-name" name="name" placeholder="eneter name" type="text" value=""/>
        </div>
        <div class="form__element">
            <label for="user-pass">Enter name</label>
            <input id="user-pass" name="pass" placeholder="eneter pass" type="password" value=""/>
        </div>
        <div class="form__element form__element--actions">
            <input type="submit" value="Sign In"/>
            <input type="reset" value="clear"/>
        </div>
    </form>
</section>
<section class="content-block centered ">
    <p class="content-block__text">Status: <em><?php echo $message; ?></em></p>
</section>

<section class="content-block centered ">
    <a class="action-button" href="index.php">Back</a>
</section>

<?php if($_SESSION['authorized'] == 1){ ?>
    <section class="account-panel">
        <p class="account-panel__message">Welcome, <em><?php echo $_SESSION['userMessage']; ?></em></p>
        <a class="account-panel__action" href="close.php">sign out</a>
    </section>
<?php } ?>

<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
