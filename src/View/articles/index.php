
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



/*require 'controler/Router.php';
require 'controller/ArticleController.php';
require 'controler/HomepageController.php';

$page = $_GET['page'] ?? null;
$router = new Router();
$router->handleRequest($page);*/

?>

<?php require 'includes/header.php'?>
<?php // Use any data loaded in the controller here ?>

<section>
    <h1>Articles</h1>
    <ul>
        <?php foreach ($articles as $article) : ?>
            <li><?= $article->title ?> <?= $article->formatPublishDate() ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require 'includes/footer.php'?>