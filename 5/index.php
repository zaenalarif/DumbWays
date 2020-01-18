<?php
require_once('db.php');
require_once('function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PokeDumb Find</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header>
        <div class="is-half-1">
            <h1>PokeDumb Find</h1>
        </div>

        <div class="is-half-2">
            <a class="button" href="create_pokemon.php">Add Pokemon</a>
            <a class="button" href="create_element.php">Add Element</a>
        </div>
    </header>

    <div class="body">

        <div class="parent_item">
<?php
        $result = getPokemon();
        while($row = mysqli_fetch_assoc($result)){ ?>
            <a href="" class="item">
                <img class="image" src="../<?= $row["photo"]?>" alt="">
                <p class="title"><?= $row["name"]?></p>
                <div class="parent_element">
                    <span class="element"><?= $row["name_element"]?></span>
                </div>
            </a>
            
    <?php }
?>
        </div>

    </div>

</body>
</html>