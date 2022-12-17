<?php

namespace MyProject\Controller;

class HomeController
{
public function index()
{
    // Get the users data
    $users = [
        ['name' => 'Alice'],
        ['name' => 'Bob'],
        ['name' => 'Charlie'],
    ];

    // Render the home page view
    $view = new \MyProject\View\HomeView();
    $view->render($users);
}
}
