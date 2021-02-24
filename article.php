<?php
$name = $_GET['name'];
$HTML = file_get_contents(__DIR__ . "/articles/$name.html");
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VLM &bull; <?= ucfirst(str_replace('-', ' ', $name)) ?></title>
    <link rel="stylesheet" href="assets/article.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script defer src="assets/article.js"></script>
</head>

<body>
    <?php require("templates/navbar.html"); ?>

    <div class="container">
        <?= $HTML ?>
    </div>

    <?php require("templates/footer.html"); ?>
</body>

</html>