<!DOCTYPE html>
<html>
    <head>
        <title>Simple For Loop</title>
    </head>
    <body>
        <?php
            for ($i = 1; $i < 13; $i++) {
                $rez = $i*$i;
                echo "<p>$i * $i = $rez</p>";
            }
        ?>
    </body>
</html>