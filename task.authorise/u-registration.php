<?php
session_start();
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
    $queryAdd = "INSERT INTO Users(`name`, password) VALUES('$data_name', '$data_pass')";
    $queryCheck = "SELECT * FROM Users WHERE (`name` = '$data_name')";


    /*get result*/
    $checkUserName = mysqli_query($connect, $queryCheck) or die("Error" . mysqli_error($connect));

    if (mysqli_num_rows($checkUserName) >= 1) {
        $message = "user with name: <em>$name</em> already exists";
    } else {
        $adduser = mysqli_query($connect, $queryAdd) or die("Error" . mysqli_error($connect));
        $message = "User with name: <em>$name</em> was added";
    }
    /*close connection*/
    mysqli_close($connect);

} else {
    $message = "Enter your data please!";
}

?>
<h1 class="main-title">Registration form</h1>
<?php if ($_SESSION['authorized'] == 1) { ?>
    <section class="content-block centered ">
        <p class="content-block__text">You are logged as <strong><?php echo $_SESSION['userMessage']; ?></strong></p>
        <p class="content-block__text">Sign out please, before register new user</p>
        <a class="account-panel__action" href="close.php">sign out</a>

    </section>
<?php } else { ?>
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
                <input type="submit" value="Register"/>
                <input type="reset" value="clear"/>
            </div>
        </form>
    </section>
    <section class="content-block centered ">
        <p class="content-block__text"><b>Status:</b> <?php echo $message; ?></p>
    </section>
<?php } ?>
<section class="content-block centered ">
    <a class="action-button" href="index.php">Back</a>
</section>
<?php if ($_SESSION['authorized'] == 1) { ?>
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
