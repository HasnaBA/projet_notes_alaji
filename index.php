<?php

$params = explode('/', $_SERVER['REQUEST_URI']);


$route = $params[2];
if ($route === "candidats") {
    echo "je suis sur la route candidats";
} else if ($route === "quizzes") {
    require 'controller/QuizzesController.php';
    showQuizzes();
} else {
    echo "je suis sur la route accueil";
}
