<?php
require 'model/quizModel.php';

function showQuizzes() {
    $quizzes = getQuizzes();
    require('view/quizzes.php');
}