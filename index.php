<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>

        <?php
        session_start();

        $_SESSION["cart"] = array();

        $_SESSION["cart"][] = array("prodID" => 1, "price" => 199, "name" => "Hamburger Smasher");
        $_SESSION["cart"][] = array("prodID" => 2, "price" => 99999, "name" => "Batman");
        $_SESSION["cart"][] = array("prodID" => 3, "price" => 299, "name" => "Fart in jar");
        $_SESSION["cart"][] = array("prodID" => 4, "price" => 199, "name" => "Stefan Löfven");

        var_dump($_SESSION);
        ?>  
        <form>
            <table>
                <tr>
                    <td>
                        <p>Hamburger Smasher</p>
                        <input type="hidden" name="id" value="1">
                    </td>
                    <td>
                        <input type="text" name="antal" value="1">
                    </td>
                    <td>
                        <input type="submit" name="action" value="add">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

