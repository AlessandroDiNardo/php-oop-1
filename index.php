<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php
        require_once 'models/movie.php';
        require_once 'db.php';
    ?>
</head>
<body>

<h1>MOVIE LIST</h1>

<div class="container">

    <?php
    
        foreach ($movieList as $movie){

            echo "<div>" . $movie -> getMovie() . "</div>";
        }

    ?>

</div>

</body>
</html>
 

