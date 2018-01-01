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
    $grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
    echo var_dump($grades);
    echo "<br>";
    # egoing 은 key값 index랑 마찬가지 => 뒤에 값은 키값에 대한 값이다.
    # 다르게 표현하면
    $grades1 = [];
    $grades1['age'] = 29;
    $grades1['height'] = 176;
    $grades1['kg'] = 95;
    echo var_dump($grades1);
    echo "<br>". $grades1['kg'];
    # php는 배열의 인덱스를 문자열로 해도 가능하다.
    ?>
</body>
</html>