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
    <title>lesson_2</title>
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
    <h2 class="main-title" title="Variables">Forms</h2>
    <section class="content-block centered form-box">
        <form action="/" method="get" class="form">
            <div class="form__element">
                <p class="form-legend">Input text</p>
                <label for="inputId">Enter Name</label>
                <input id="inputId" name="user name" placeholder="type here" type="text"/>
            </div>
            <div class="form__element form__element--radio form__element--column">
                <p class="form-legend">Radio buuttons</p>
                <label>
                    <input id="" name="r-name" value="1" type="radio" checked/>
                    <i>value 1</i>
                </label>
                <label>
                    <input id="" name="r-name" value="2" type="radio"/>
                    <i>value 2</i>
                </label>
                <label>
                    <input id="" name="r-name" value="3" type="radio"/>
                    <i>value 3</i>
                </label>
            </div>
            <div class="form__element form__element--checkbox form__element--column">
                <p class="form-legend">Checkboxes buttons</p>
                <label>
                    <input id="" name="c-name" value="1" type="checkbox"/>
                    <i>value 4</i>
                </label>
                <label>
                    <input id="" name="c-name" value="2" type="checkbox"/>
                    <i>value 5</i>
                </label>
                <label>
                    <input id="" name="c-name" value="3" type="checkbox"/>
                    <i>value 6</i>
                </label>
            </div>
            <div class="form__element">
                <p class="form-legend">Select</p>
                <select name="select" id="">
                    <option value="opt-1">option-1</option>
                    <option value="opt-2">option-2</option>
                    <option value="opt-3">option long-3</option>
                </select>
            </div>
            <div class="form__element">
                <p class="form-legend">Multi select</p>
                <select name="select" id="" multiple="multiple">
                    <option value="opt-1">option-1</option>
                    <option value="opt-2">option-2</option>
                    <option value="opt-3">option long-3</option>
                    <option value="opt-4">option long-4</option>
                    <option value="opt-5">option really long-5</option>
                </select>
            </div>
            <div class="form__element form__element--checkbox form__element--column">
                <p class="form-legend">Text area example</p>
                <textarea name="text" id="" cols="30" rows="10" placeholder="Type text here"></textarea>
            </div>
        </form>
    </section>
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/main.js'></script>
</body>
</html>