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
    
    foreach($grades as $key => $val) {
        echo "key: {$key} val: {$val}<br/>";
    }
    #index가 아닌 key값으로 된 배열을 출력하는 방법이다.
    
    ?>
</body>
</html>