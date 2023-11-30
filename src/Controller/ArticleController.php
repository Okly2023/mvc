<?php
namespace Controller;
/*

declare(strict_types = 1);

class ArticleController
{
    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    
        
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles()
    {
        // TODO: prepare the database connection
        // Assuming you have a DatabaseManager class
        $dbManager = new DatabaseManager();
        $db = $dbManager->getConnection();
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)
        $query = $db->query("SELECT * FROM articles");
        $rawArticles = $query->fetchAll(PDO::FETCH_ASSOC);
        $rawArticles = [];

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }

        return $articles;
    }

    public function show($id)
    {
        // TODO: this can be used for a detail page
      
        $article = $this->getArticleById($id);
         require 'View/articles/show.php';
   }

private function getArticleById($id)
{
    $dbManager = new DatabaseManager();
    $db = $dbManager->getConnection();
    $query = $db->prepare("SELECT * FROM articles WHERE id = :id");
    $query->execute([':id' => $id]);
    $rawArticle = $query->fetch(PDO::FETCH_ASSOC);
    return new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
      
    }
}*/



use Model\Article;
use Controller\DatabaseManager;

class ArticleController
{
    public function index()
    {
        $articles = $this->getArticles();
        //require 'View/articles/index.php';
    }

    private function getArticles()
    {
        // Your existing code...

         // TODO: prepare the database connection
        // Assuming you have a DatabaseManager class
        $dbManager = new DatabaseManager();
        $db = $dbManager->getConnection();
        // Note: you might want to use a re-usable databaseManager class - the choice is yours
        // TODO: fetch all articles as $rawArticles (as a simple array)
        $query = $db->query("SELECT * FROM articles");
        $rawArticles = $query->fetchAll(PDO::FETCH_ASSOC);
        $rawArticles = [];

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // We are converting an article from a "dumb" array to a much more flexible class
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }

        return $articles;
    }

    public function show($id)
    {
        $article = $this->getArticleById($id);
        require 'View/articles/show.php';
    }

    private function getArticleById($id)
    {
        // Your existing code...

        $dbManager = new DatabaseManager();
    $db = $dbManager->getConnection();
    $query = $db->prepare("SELECT * FROM articles WHERE id = :id");
    $query->execute([':id' => $id]);
    $rawArticle = $query->fetch(PDO::FETCH_ASSOC);
    return new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
      
    }
}
?>