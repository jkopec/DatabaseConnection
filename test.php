<?php
/**
 * Created by PhpStorm.
 * User: jakubkopec
 * Date: 20.05.16
 * Time: 23:39
 */

class Test
{
    public static function mysqli_oo_test(){
        include("mysqli_oo.php");

        $database = MySQLi_OO_Type::getInstance();
        $database->checkConnection();
        $connection = $database->getConnection();
        $result=$connection->query("SELECT * FROM MyGuests");

        if ($result->num_rows>0)
        {
            echo "<table border='1' class='table table-hover table-bordered table-condensed'>
                  <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Date</th>
                  </tr>";

            while ($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td> " . $row['firstname'] . "</td>";
                echo "<td> " . $row['lastname'] . "</td>";
                echo "<td> " . $row['reg_date'] . "</td>";
                echo "<tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "0 results";
        }
    }
    
    public static function mysqli_procedural_test(){
        include ("mysqli_procedural.php");

        $database = MySQLi_Procedural_Type::getInstance();
        $database->checkConnection();
        $connection = $database->getConnection();
        $result = mysqli_query($connection, "SELECT * FROM MyGuests");

        if (mysqli_num_rows($result) > 0)
        {
            echo "<table border='1' class='table table-hover table-bordered table-condensed'>
                  <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Date</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td> " . $row['firstname'] . "</td>";
                echo "<td> " . $row['lastname'] . "</td>";
                echo "<td> " . $row['reg_date'] . "</td>";
                echo "<tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "0 results";
        }
    }
    
    public static function pdo_test(){
        include ("pdo.php");
        
        $database = PDO_Type::getInstance();
        $connection = $database->getConnection();
        try
        {
            $statement = $connection->prepare("SELECT * FROM MyGuests");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            
            if(count($result)>0)
            {
                echo "<table border='1' class='table table-hover table-bordered table-condensed'>
                  <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Date</th>
                  </tr>";

                foreach ($result as $row){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td> " . $row['firstname'] . "</td>";
                    echo "<td> " . $row['lastname'] . "</td>";
                    echo "<td> " . $row['reg_date'] . "</td>";
                    echo "<tr>";
                }
                
                echo "</table>";
            }
            else
            {
                echo "0 results";
            }
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>