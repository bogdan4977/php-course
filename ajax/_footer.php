<?php
/**
 * FOOTER
 */
?>
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/main.js'></script>
<script>
    var container = $("#loadev");
    function show () {
        $.ajax({
            url:"time.php",
            cache: false,
            success: function (html) {
                container.html(html);
            }
        });
    }
//    $(document).ready(function () {
//        show();
//        setInterval("show()", 1000);
//    });
</script>

<script>
    $("#btn-1").on("click", function () {
        $.ajax({
            url:"box1.html",
            cache:false,
            success:function(html){
                $("#box-1").html(html);
            }
        })
    });
    $("#btn-2").on("click", function () {
        $.ajax({
            url:"box2.html",
            cache:false,
            success:function(html){
                $("#box-2").html(html);
            }
        });
    });
</script>
<script>
    function  forEach(data, callback) {
        for(var key in data){
            if(data.hasOwnProperty(key)){
                callback(key, data[key]);
            }
        }
    }
    $.ajax({
        url:"base.php",
        dataType:"json",
        success: function(data){
            var str = [];
            forEach(data, function (key, value) {
                str.push('<b>' + key + '</b>=' + value);
            });
            $("#result").html(str.join('<br>'));
        }
    });
</script>
</body>
</html>
