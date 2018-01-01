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
    $a = 100;
    echo gettype($a);
    //int
    settype($a, 'double');
    // $a를 double로 변경
    echo '<br />';
    //다음줄
    echo gettype($a);
    //double
    ?>
</body>
</html>