<?php
    include 'inc/functions.php'
?>
<html>
    <head>
        <title> Rock Paper Scissors</title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id = "main">
            <?php
            echo '<p> A game of Rock Paper Scissors</p>';
        
                play();
            ?>
            <form>
                <input type = "submit" value = "Rock Paper Scissors!"/>
            </form>
        </div>
    </body>
</html>    