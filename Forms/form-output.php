<!DOCTYPE html>
<html>
    <head>
        <title>Simple form</title>
    </head>
    <body>
        <h1>Favourite city</h1>
        <?php
            $city = $_POST['favouriteCity'];
           echo "<p>Your favourite city is $city</p>"; 
        ?>
    </body>
</html>