<?php 
include __DIR__ . "/data/db.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body class="bg-black">
    <div class="container-fluid">
        <div>

        </div>
        <div class="container">
            <div class="albums d-flex flex-wrap">
                <?php 
                foreach($db as $albums) {
                    echo "<div class='album'>";
                    echo '<img src=" '. $albums["poster"] .' " />';
                    echo "<div class='info'>";
                    echo "<h2>". $albums["title"] ."</h2>";
                    echo" <h3>". $albums["author"] ."</h3>";
                    echo "<h4>". $albums["year"] ."</h4>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

