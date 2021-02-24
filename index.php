<?php 
$json = file_get_contents('data/articles.json');
$articles = json_decode($json);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivere con la Lesione Midollare</title>

    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ=="
        crossorigin="anonymous"></script>
    <script defer src="assets/app.js"></script>
</head>

<body>
    <?php require("templates/navbar.html"); ?>

    <header></header>

    <div class="container">
        <div class="row justify-content-center">
            <?php foreach($articles as $ar) { ?>
            <div id="<?= str_replace(' ', '-', strtolower($ar->title))?>" class="article col-lg-3">
                <a href="article.php?name=<?= $ar->name ?>">
                    <img src=<?= $ar->thumbnail ?> class="img-fluid">
                    <h3 class="text-muted text-center"> <?= $ar->title ?> </h3>
                </a>
            </div>


            <?php } ?>
        </div>
    </div>

</body>

</html>