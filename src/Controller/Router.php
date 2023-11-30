<?php

namespace Controller;

class Router
{
    public function handleRequest(string $page): void
    {
        switch ($page) {
            case 'articles':
                $controller = new ArticleController();
                $controller->index();
                break;
            case 'article':
                $controller = new ArticleController();
                $id = $_GET['id'] ?? null;
                if ($id) {
                    $controller->show($id);
                }
                break;
            default:
                $controller = new HomepageController();
                $controller->index();
                break;
        }
    }
}
?>