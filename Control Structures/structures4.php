<!DOCTYPE html>
<html>
    <head>
        <title>Nested For Loops</title>
    </head>
    <body>
        <table style="width:15%">
        <?php
            for ($i = 1; $i < 8; $i++) {
                echo "<tr>";
                for ($j = 1; $j < 8; $j++) {
                    $rez = $i*$j;
                    echo "<td style='border: 1px solid black'>$rez</td>";
                }
                echo '</tr>';
            }
        ?>
        </table>
    </body>
</html>