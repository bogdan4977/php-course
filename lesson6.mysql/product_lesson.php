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

$message = "No data was added";
if(isset($_POST['name'])){

    $link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $description = mysqli_real_escape_string($link, $_POST['description']);

    $valid_types = array("gif","jpg", "png", "jpeg");
    if (isset($_FILES["userfile"])) {
        if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
            $filename=basename($_FILES['userfile']['name']);
            $ext = substr($_FILES['userfile']['name'], 1 + strrpos($_FILES['userfile']['name'], "."));

            //проверим фото
            if(!in_array($ext, $valid_types)){
                echo 'Error: Invalid file type.';
                $uploadfile = '';
            }
            else{
                $uploaddir = 'images/';
                $uploadfile = $uploaddir.$filename;
                move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
            }
        }
        else {
            $uploadfile = '';
        }
    } else {
        $uploadfile = '';
    }

    $sql = "INSERT INTO data(image) VALUES ('$uploadfile')";
    $result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
    $id = mysqli_insert_id($link);

    $sql_description = "INSERT INTO data_description(id, name, description) VALUES('$id','$name','$description')";

    $result = mysqli_query($link, $sql_description)or die("Ошибка " . mysqli_error($link));

    echo 'Добавили товар с id = ' . $id;
}

?>

<h1 class="main-title">MySQL product #2</h1>

<section class="content-block centered " style="background-color: #eeeeee; ">
    <a class="action-button" href="form_product.php">Reset</a>
    <a class="action-button" href="index.php">back</a>
</section>
<h2 class="main-title" title="Variables">Functions task</h2>
<section class="content-block centered ">
    <p class="content-block__text">Status: <i><?php echo $message; ?></i></p>
</section>
<section class="content-block centered ">
    <h2 class="content-block__title">Product data</h2>
    <form name="form_product" action="product_lesson.php" method="post" class="form" enctype="multipart/form-data">

        <div class="form__element necessary">
            <label for="name">Name</label>
            <input id="name" name="name" placeholder="name" type="text" value=""/>
        </div>

        <div class="form__element necessary">
            <label for="descr">Description</label>
            <textarea id="descr" name="description" placeholder="Description"></textarea>
        </div>

        <div class="form__element necessary">
            <label for="file">Product image</label>
            <input id="file" name="userfile" type="file"/>
        </div>

        <div class="form__element form__element--actions">
            <input type="submit" value="add"/>
            <input type="reset" value="clear"/>
        </div>
    </form>
</section>
<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
