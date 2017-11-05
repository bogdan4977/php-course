<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='description' content='php lesson 1'>
    <meta name='keywords' content=''>
    <meta name='robots' content='index, follow'>
    <meta name='author' content='sedovolosy.com'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP Calculator</title>
    <!--    <link href='https://fonts.googleapis.com/css?family=Michroma' rel='stylesheet'>-->
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link rel='stylesheet' href='css/normalize.css'>
    <link rel='stylesheet' href='css/all.css'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<div class='page-wrapper'>
    <h1 class="main-title">PHP Calculator</h1>
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
    /**
     * Calculator script
     */
    //calc variables
    $calcStart = $_POST["calcStart"];
    $number_1 = $_POST["number_1"];
    $number_2 = $_POST["number_2"];

    //calc actions
    $calcAction = $_POST["calc_action"];

    //results
    $calcResult = 0;
    $calcContent = "";
    $warningMessage = "";
    $warningClass = "notice";

    //check is $calcAction set and exist
    if ((isset($calcStart)) && $calcStart) {
        //check is number fields are filled
        if (($number_1) && ($number_2)) {

            //check is action is choosen
            if (isset($calcAction) && $calcAction) {

                //Calculator logic START
                if ((string)$calcAction === "plus") {
                    //plus
                    $calcContent = $number_1 . " + " . $number_2;
                    $calcResult = ($number_1 + $number_2);
                } elseif ((string)$calcAction === "minus") {
                    //minus
                    $calcContent = $number_1 . " - " . $number_2;
                    $calcResult = ($number_1 - $number_2);
                } elseif ((string)$calcAction === "multiply") {
                    //multiply
                    $calcContent = $number_1 . " x " . $number_2;
                    $calcResult = ($number_1 * $number_2);
                } elseif ((string)$calcAction === "divide") {
                    //divide
                    $calcContent = $number_1 . " &#247; " . $number_2;
                    $calcResult = ($number_1 / $number_2);
                } elseif ((string)$calcAction === "sqrt") {
                    //sqrt
                    $calcContent = "&#8730; " . $number_1;
                    $calcResult = sqrt($number_1);
                    $number_2 = 0;
                } elseif ((string)$calcAction === "pow") {
                    //pow
                    $calcContent = $number_1 . "<sup>$number_2</sup>";
                    $calcResult = pow($number_1, $number_2);
                } elseif ((string)$calcAction === "percent") {
                    //persent
                    $calcContent = $number_1 . " % " . $number_2;
                    $calcResult = (($number_1 / $number_2) * 100) . "%";
                }
                //Calculator logic END
                $warningMessage = "<strong>Calculated successfully.</strong>";
            } else {
                $warningMessage = "<strong>Ooops! </strong>Please, choose an action";
            }
        } else {
            //warning message if fields are empty
            $warningMessage = "<strong>Ooops! </strong>Please, enter values";
        }
    } else {
        $warningMessage = "<strong>Enter numbers and choose an action!</strong>";
    }
    ?>
    <section class="content-block content-block centered form-box calculator">
        <p class="calculator__message"><?php echo $warningMessage; ?></p>
        <form name="calculator" action="index.php" method="post" class="form" enctype="multipart/form-data">
            <div class="form__element form__element--calculator">
                <div class="calc-section calc-section--inputs <?php if (!($number_1) && !($number_2) && ((isset($calcStart)) && $calcStart)) {
                    echo $warningClass;
                } ?>">
                    <input name="number_1" type="number" step="any" placeholder="enter X"
                           value="<?php if (isset($number_1) && $number_1) {
                               echo $number_1;
                           } ?>"/>
                    <input name="number_2" type="number" step="any" placeholder="enter Y"
                           value="<?php if (isset($number_2) && $number_2) {
                               echo $number_2;
                           } ?>"/>
                    <div class="notice-box">notice</div>
                </div>
                <div class="calc-section calc-section--actions <?php if (!isset($calcAction) && !$calcAction && ((isset($calcStart)) && $calcStart)){
                    echo $warningClass;
                } ?>">
                    <h3 class="calc-section__title">Choose an action</h3>
                    <button type="button" class="calc-section__button">
                        <input name="calc_action" value="plus" type="radio" id="plus"/>
                        <label for="plus">+</label>
                    </button>
                    <button type="button" class="calc-section__button">
                        <input name="calc_action" value="minus" type="radio" id="minus"/>
                        <label for="minus">-</label>
                    </button>
                    <button type="button" class="calc-section__button">
                        <input name="calc_action" value="multiply" type="radio" id="multiply"/>
                        <label for="multiply">&#215;</label>
                    </button>
                    <button type="button" class="calc-section__button">
                        <input name="calc_action" value="divide" type="radio" id="divide"/>
                        <label for="divide">&#247;</label>
                    </button>
                    <button type="button" class="calc-section__button">
                        <input name="calc_action" value="sqrt" type="radio" id="sqrt"/>
                        <label for="sqrt">&#8730;X</label>
                    </button>
                    <button type="button" class="calc-section__button">
                        <input name="calc_action" value="pow" type="radio" id="pow"/>
                        <label for="pow">X<sup>y</sup></label>
                    </button>
                    <button type="button" class="calc-section__button">
                        <input name="calc_action" value="percent" type="radio" id="percent"/>
                        <label for="percent">X % Y</label>
                    </button>
                    <div class="notice-box">notice</div>
                </div>
                <div class="calc-section calc-section--todo">
                    <input name="calcStart" type="submit" value="="/>
                    <input name="resetFields" type="reset" value="Cancel"/>
                    <a href="/">Reset</a>
                </div>
            </div>
        </form>
        <div class="calculator__message">
            <h4 class="message-title">
                <?php if ($calcContent) {
                    echo "Result of <i>$calcContent</i>";
                } else {
                    echo "<b>Waiting for conditions..</b>";
                } ?>
            </h4>
            <em><?php echo $calcResult; ?></em>
        </div>
    </section>

</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/main.js'></script>
</body>
</html>