<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if($_POST['id'] === 'egoing'){
        echo 'id right';
        echo '<br>';
        if($_POST['password'] === '1111')
            echo 'pwd right';
        else
            echo 'pwd wrong';
        echo '<br>';
    } else {
        echo 'id wrong';
    }echo '<br>';
    ?>
</body>
</html>