<?php

namespace MyProject\View;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class HomeView
{
    private $twig;

    public function __construct()
    {
        // Set up Twig
        $loader = new FilesystemLoader(__DIR__ . '/templates');
        $this->twig = new Environment($loader);
    }

public function render($users)
{
    // Render the home page HTML
    echo $this->twig->render('home.html', ['users' => $users]);
}

}
