<!DOCTYPE html>
<html>
    <head>
        <title>Simple form</title>
    </head>
    <body>
        <h1>Favourite city</h1>
        <?php
            if (isset($_POST['favouriteCity'])) {
                $city = $_POST['favouriteCity'];
                echo "<p>Your favourite city is $city</p>"; 
            } else {
                echo '<form method="post" action="forms2.php">
                    <input type="text" name="favouriteCity" placeholder="What is your favourite city?"/>
                    <input type="submit" value="Submit"/></form>';
            }
        ?>
    </body>
</html>