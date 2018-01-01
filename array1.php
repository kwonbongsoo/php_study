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
    $li = array_merge($li, ['f','g']);
    //배열의 끝에 배열을 추가하는 방법
    var_dump($li);
    ?>
</body>
</html>