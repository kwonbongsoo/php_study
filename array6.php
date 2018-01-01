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
    $li = ['c', 'e', 'a', 'b', 'd'];
    rsort($li);
    # 역순 정렬하는 함수
    var_dump($li);
    ?>
</body>
</html>