<!DOCTYPE html>
<html>
    <head>
        <title>Poetry</title>
    </head>
    <body>
        <h1>Days of the week poetry!</h1>
        
        <?php
        if (!isset($_POST["button"])) { 
            ?>
            <form method="post" action="forms4.php">
                <h2>Select a day of the week:</h2>
                <select name="day">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
                <input type="submit" name="button" placeholder="Click here!"/>
            </form>
            <?php
        } else {
            $day = strtolower($_POST["day"]);
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
                    echo '<p>No Sundays allowed.</p>';
            }
            ?>
            <form action="forms4.php">
                <input type="submit" name="back" value="Back" onclick="self.location='forms4.php'"/>
            </form>
            <?php
        }
        ?>

    </body>
</html>