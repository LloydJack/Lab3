
/**
 * Created by PhpStorm.
 * User: 1303788
 * Date: 19/10/2015
 * Time: 15:27
 */

<!DOCTYPE html>
<HTML>
    <head>
        </head>
        <body>
            <p>
                <?php
                echo "Hello, world!";
                echo "Hello," . " " . "world" . "!";
                echo 5 * 7;
                $myname = "Frodo Baggins";
                $myage = 111;
                echo "My name is" . $myname . "and I am " . $myage;

                echo "I get printed!";
                // I don't! I'm a comment.

                /* I don’t get printed either
                and neither do I */

                $name = "Simon";

                if ($name == "Simon") {
                    print "I know you!";
                }
                else {
                    print "Who are you?";
                }

                ?>
            </p>
        </body>
</HTML>