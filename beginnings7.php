<!DOCTYPE html>
<html>
    <head>
        <title>Variable data types</title>
    </head>
    <body>
        <h1>Variable Types!</h1>
        <p>
            <?php
                $whatsit = "Hey there";
                echo 'Value is '.gettype($whatsit).'<br/>';
                $whatsit = 3.1416;
                echo 'Value is '.gettype($whatsit).'<br/>';
                $whatsit = true;
                echo 'Value is '.gettype($whatsit).'<br/>';
                $whatsit = 313;
                echo 'Value is '.gettype($whatsit).'<br/>';
                $whatsit = NULL;
                echo 'Value is '.gettype($whatsit);
            ?>
        </p>    
    </body>
</html>