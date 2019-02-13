<?php
setcookie('test','coucou', time()+1000, '/');

include 'modules/database.php';
$topics = fetch($pdo,'topics','*');

$topics = (object)$topics;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/header.css">
</head>
<body>
    <?php include 'modules/header.php'?>


    <main>
        <?php foreach($topics as $value):?>
        <section class="topics">
            <img src="https://picsum.photos/600/200/?image=431" alt="">
            <a href="<?= 'topic.php?topic='.$value->hash_topic ?>" class="text-intro">
                <h3><?= $value->title ?></h3>
                <p> <?= mb_strimwidth($value->content , 0, 300, "...") ?> </p>
            </a>
        </section>
        <?php endforeach ?>
    </main>
  
    <footer>

    </footer>
    <script src="scripts/main.js"></script>
</body>
</html>