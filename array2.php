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
    $li = ['a', 'b', 'c', 'd', 'e'];
    array_unshift($li,'z');
    #배열의 시작점에 추가하는 방법
    var_dump($li);
    ?>
</body>
</html>