<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='description' content='php lesson 1'>
    <meta name='keywords' content=''>
    <meta name='robots' content='index, follow'>
    <meta name='author' content='sedovolosy.com'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP Files</title>
    <link href='https://fonts.googleapis.com/css?family=Michroma' rel='stylesheet'>
    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/all.css'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>lesson_3</title>
</head>
<body>
<div class='page-wrapper'>
    <h1 class="main-title">Lesson #3 Files</h1>
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
    $fileAnswer = "";
    /*form logic*/
    if (isset($_FILES["userfile"])) {
        if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        //Возвращает TRUE, если файл filename был загружен при помощи HTTP POST
        $filename = basename($_FILES['userfile']['name']);
        //basename -- Возвращает имя файла из указанного пути
        $uploaddir = 'uploads/';
        $uploadfile = $uploaddir . $filename;
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
        echo "<img src='$uploadfile' alt='$filename' title='$filename' />";
        } else {
            $fileAnswer = "Error: empty file.";
        }
    } else {
        $fileAnswer = "File wasn't attached";
    }
?>

    <h2 class="main-title" title="Variables">File Forms</h2>

    <section class="content-block centered form-box">
        <section class="content-block centered ">
            <p><?php echo $fileAnswer; ?></p>
        </section>
        <form name="form2" action="file.php" method="post" class="form" enctype="multipart/form-data">
            <div class="form__element">
                <p class="form-legend">File form</p>
                <label for="cardNumber">Upload file</label>
                <input id="file" name="userfile"  type="file"/>
            </div>
            <div class="form__lement form__lement--actions">
                <input type="submit" value="Send form"/>
            </div>
        </form>
    </section>


</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/main.js'></script>
</body>
</html>