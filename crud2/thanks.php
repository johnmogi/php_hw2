<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3; URL='index.php'" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Thanks!</title>
</head>
<body class="container jumbotron">
    <h2> your 
    <?php
            session_start();
            
            if(isset($_SESSION["lastCommands"])) {
                $lastCommands = $_SESSION["lastCommands"];
                echo "Last Commands:<br>" . $lastCommands;
            }
        ?>
        request have been processed</h2>
        <br/>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/SMbVhvGv46g" frameborder="0" autoplay="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>