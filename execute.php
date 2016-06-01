<?php
/**
 * Created by PhpStorm.
 * User: jakubkopec
 * Date: 21.05.16
 * Time: 01:43
 */
include ("test.php");


if(isset($_GET['db']))
{
    switch ($_GET['db']):
        case 'oo':
            echo "<h3 id='oo'>MySQLi Object Oriented</h3>";
            Test::mysqli_oo_test();
            break;

        case 'proc':
            echo "<h3 id='proc'>MySQLi Procedural</h3>";
            Test::mysqli_procedural_test();
            break;

        case 'pdo':
            echo "<h3 id='pdo'>PDO</h3>";
            Test::pdo_test();
            break;

        default:
            echo "<h3>Diese Datenbank kenne ich nicht...</h3>";
            break;

    endswitch;
}
else
{
    echo "<h3 id='pdo'>PDO </h3>";
    Test::pdo_test();
}

?>