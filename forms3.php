<!DOCTYPE html>
<html>
    <head>
        <title>Poetry</title>
    </head>
    <body>
        <h1>Days of the week poetry!</h1>
        
        <?php
        if (!isset($_POST["day"])) {
            echo '<form method="post" action="forms3.php">
            <input type="text" name="day" placeholder="What day is it?"/>
            <input type="submit" value="Submit"/>
            </form>';
        } else {
            $day = strtolower($_POST["day"]);
            //If-elseif-else construction was way too awkward.
            switch ($day) {
                case 'monday':
                    echo '<p>Laugh on Monday, laugh for danger.</p>';
                    break;
                case 'tuesday':
                    echo '<p>Laugh on Tuesday, kiss a stranger.</p>';
                    break;
                case 'wednesday':
                    echo '<p>Laugh on Wednesday, laugh for a letter.</p>';
                    break;
                case 'thursday':
                    echo '<p>Laugh on Thursday, something better.</p>';
                    break;
                case 'friday':
                    echo '<p>Laugh on Friday, laugh for sorrow.</p>';
                    break;
                case 'saturday':
                    echo '<p>Laugh on Saturday, joy tomorrow.</p>';
                    break;
                default:
                    echo '<p>Don\'t think you spelled that right. Also, no Sundays allowed.</p>';
            }
        }
        
        ?>
    </body>
</html>