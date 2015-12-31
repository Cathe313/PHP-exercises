<!DOCTYPE html>
<html>
    <head>
        <title>Simple Loops</title>
    </head>
    <body>
        <?php
            //First loop
            $abc = 'abc ';
            $count = 9;
            echo "<p>";
            while ($count > 0) {
                echo $abc;
                $count--;
            }
            echo '</p><p>';
            
            //Second loop
            $xyz = 'xyz ';
            $count = 9;
            do {
                echo $xyz;
                $count--;
            } while ($count > 0);
            echo '</p><p>';
            
            //Third loop
            for ($i = 1; $i < 10; $i++) {
                echo $i." ";
            }
            echo '</p><ol>';
            
            //Fourth loop
            for ($i = A; $i < G; $i++){
                echo "<li>Item ".$i."</li>";
            }
            echo "</ol>"
        ?>
    </body>
</html>