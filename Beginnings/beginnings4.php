<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $value = 8;
            echo "Value is now $value. <br/>";
            echo "Add 2. Value is now ".($value += 2).".<br/>";
            echo "Subtract 4. Value is now ".($value -= 4).".<br/>";
            echo "Multiply by 5. Value is now ".($value *= 5).".<br/>";
            echo "Divide by 3. Value is now ".($value /= 3).".<br/>";
            $value++;
            echo "Increment value by one. Value is now $value. <br/>";
            $value--;
            echo "Decrement value by one. Value is now $value.<br/>";
        ?>
    </body>
</html>