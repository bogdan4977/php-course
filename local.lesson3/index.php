<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='description' content='php lesson 1'>
    <meta name='keywords' content=''>
    <meta name='robots' content='index, follow'>
    <meta name='author' content='sedovolosy.com'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP Lesson#3</title>
    <link href='https://fonts.googleapis.com/css?family=Michroma' rel='stylesheet'>
    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/all.css'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<div class='page-wrapper'>
    <h1 class="main-title">Lesson #3</h1>
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
    /*form logic*/
    if (isset($_GET['formHide'])) {
        $message = "success";
        $formData = $_GET;

        /*field values*/
        $cardNumber = $_GET["cardnumber"];
        $CV2 = $_GET["CV2"];
        $mud = $_GET["mud"];
        $language = $_GET["language"];
        $review = $_GET["review"];

        $color = $_GET["color"];

        $multiple = $_GET["day"];


        /*concat result*/
        $concat_result = (string)($cardNumber . " " . $CV2 . " " . $mud . " " . $language . " " . $review);
    } else {
        $message = "Enter data";
        $cardNumber = "";
        $CV2 = "";
        $mud = "";
        $language = "";
        $review = "";
    }
    /**Задача!!! Собрать все переменные полей(значения полей),
     **обьеденить через конкaтинацию, вывести на фронт. Собрать несколько разных форм
     */
    ?>
    <h2 class="main-title" title="Variables">Forms</h2>
    <section class="content-block centered ">
        <strong><?php echo $message; ?></strong>
        <p><code><b>Form results:</b> <?php print_r($formData); ?></code></p>
        <i>Test env variables</i>
        <p><b>Server name:</b> <?php echo getenv("SERVER_NAME"); ?></p>
        <p><b>User agent:</b> <?php echo getenv("HTTP_USER_AGENT"); ?></p>
        <p><b>Remote address:</b> <?php echo getenv("REMOTE_ADDR"); ?></p>
    </section>
    <section class="content-block centered ">
        <strong><a href="/">Reset</a></strong>
    </section>
    <section class="content-block centered ">
        <h2>Variables Answer</h2>
        <p>Radibuttons: <em><?php echo  $mud; ?></em></p>
        <p>Text area: <em><?php echo  $review; ?></em></p>
        <p>Color: <em><?php print_r($color); ?></em></p>
        <p>Color: <em><?php print_r($language); ?></em></p>
        <p>Multiple: <em><?php print_r($multiple); ?></em></p>
    </section>
    <section class="content-block centered form-box">
        <form name="form1" action="index.php" method="get" class="form" enctype="multipart/form-data">
            <div class="form__element">
                <p class="form-legend">Input text</p>
                <label for="cardNumber">Card Number</label>
                <input id="cardNumber" name="cardnumber" placeholder="Enter number" type="text" value="<?php echo $cardNumber; ?>"/>
            </div>
            <div class="form__element">
                <p class="form-legend">Input text</p>
                <label for="cardCV2">Card CV2</label>
                <input id="cardCV2" name="CV2" placeholder="Enter CV2" type="text" value="<?php echo $CV2; ?>"/>
            </div>
            <div class="form__element form__element--radio form__element--column">
                <p class="form-legend">Choose your mud</p>
                <label>
                    <input id="" name="mud" value="good" type="radio" checked/>
                    <i>good</i>
                </label>
                <label>
                    <input id="" name="mud" value="lower than middle" type="radio"/>
                    <i>lower than middle</i>
                </label>
                <label>
                    <input id="" name="mud" value="bad" type="radio"/>
                    <i>bad</i>
                </label>
            </div>

            <div class="form__element form__element--checkbox form__element--column">
                <p class="form-legend">Colours</p>
                <label>
                    <input id="" name="color[red]" value="1" type="checkbox"/>
                    <i>red</i>
                </label>
                <label>
                    <input id="" name="color[brown]" value="1" type="checkbox"/>
                    <i>brown</i>
                </label>
                <label>
                    <input id="" name="color[blue]" value="1" type="checkbox"/>
                    <i>blue</i>
                </label>
            </div>


            <div class="form__element">
                <p class="form-legend">Code language</p>
                <label for="select-test">Choose an option!</label>
                <select name="language" id="select-test">
                    <option value="php">PHP</option>
                    <option value="javascript">JavaScript</option>
                    <option value="java">Java</option>
                </select>
            </div>

            <div class="form__element">
                <p class="form-legend">Multi select</p>
                <select name="day[]" id="" multiple="multiple">
                    <option value="Monday" selected="selected">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
            </div>

            <div class="form__element form__element--checkbox form__element--column">
                <p class="form-legend">Fill with your thoughts</p>
                <textarea name="review" id="" cols="30" rows="10" placeholder="Type here">
                    <?php if(isset($review) && $review){
                        echo $review;
                    } else {
                        echo "No data was passed";
                    }?>
                </textarea>
            </div>
            <div class="form__lement form__lement--actions">
                <input type="submit" value="Send form"/>
                <input type="reset" value="reset"/>
            </div>
            <?php /*hidden fields*/ ?>
            <input type="hidden" name="formHide" value="1"/>
        </form>
    </section>
    <section class="content-block centered">
        <p class="content-block__text"><i>Your result is: </i><span><?php echo $concat_result; ?></span></p>
    </section>

</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/main.js'></script>
</body>
</html>