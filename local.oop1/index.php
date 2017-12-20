<?php
/**
 * Get HEADER
 */
require_once __DIR__ . '/_header.php';
?>

<h1 class="main-title">OOP-1</h1>
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
    /*class MyClass {
    public $varPublic = 'Общий';
    protected $varProtected = 'Защищенный';
    private $varPrivate = 'Закрытый';
}
function printHello(){
    echo $this->varPublick;
    echo $this->varProtected;
    echo $this->varPrivate;
}
$obj = new MyClass();*/
    /*class TestClass
    {
        public $prop1 = "Class property";
        public function __construct()
        {
            echo 'object of class was created "',__CLASS__,'"';
        }
        public function __destruct()
        {
            echo 'object of class  "',__CLASS__,'" was delated';
        }
    }

    $obj = new TestClass;
    unset($obj);*/
    class Base{
        function func(){
            echo "<h2> base class function</h2>";
        }
        function base_func(){
            $this->func();
        }
    }
    class  Derivative extends Base {
        function func()
        {
            echo "<h3>function of extend class</h3>";
        }
    }
    $b = new Base();
    $d = new Derivative();
    $b->base_func();
    $d->func();
    $d->base_func();
?>

<section class="content-block centered ">
    <a class="action-button" href="/">Reset</a>
</section>

<section class="content-block centered">
    <h3 class="content-block__title">Доступ к свойствам</h3>
<!--    <p class="content-block__text">--><?php //echo $obj->varPublic ;?><!--</p>-->
    <p class="content-block__text"><?php  ?></p>



</section>


<?php
/**
 * Get FOOTER
 */
require_once __DIR__ . '/_footer.php';
?>
