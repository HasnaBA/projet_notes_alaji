

<?php ob_start(); ?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1> Liste des quizz</h1>
        <?php foreach ($quizzes as $quizz) {
            echo "$quizz";
        };?>
    </div>
</body>

</html>
<?php $content = ob_get_clean(); ?>
<?php require('index.php'); ?>