<ul>
<?php
foreach ($news as $new) {
    echo "<li><a href='" . $new['link'] . "'>" . $new['name'] . "</a></li>";
}
?>
</ul>