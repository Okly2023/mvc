<?php require 'includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>

    <?php // TODO: links to next and previous ?>
    <!-- <a href="#">Previous article</a>
    <a href="#">Next article</a> -->

    <a href="index.php?page=article&id=<?= $article->id - 1 ?>">Previous article</a>
    <a href="index.php?page=article&id=<?= $article->id + 1 ?>">Next article</a>
</section>

<?php require 'includes/footer.php'?>