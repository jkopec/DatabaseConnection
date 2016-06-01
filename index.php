<!DOCTYPE html>
<html lang="de">
<head>
    <title>Datenbankanbindung</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DatabaseConnections</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="?db=pdo">PDO</a></li>
                <li><a href="?db=proc">MySQLi Procedural</a></li>
                <li><a href="?db=oo">MySQLi Object Oriented</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <?php
    /**
     * Created by PhpStorm.
     * User: jakubkopec
     * Date: 20.05.16
     * Time: 21:32
     */

    include ("execute.php");
    ?> 
</div>
</body>
</html>

