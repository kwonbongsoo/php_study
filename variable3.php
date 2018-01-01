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
    $title = 'subject';
    //$title은 'subject 문자열을 가지고있고.
    $$title = 'PHP_tutorial';
    // $$title의 뜻은 title에 담긴 문자열을 변수로
    // 만들어 php tutorial이란 값을 넣는다는 뜻
    $$$title = 'java';
    //php_tutorial의 문자열을 변수로 만들어 
    // java의 값을 넣겠단말
    // 한줄요약 2차 3차 포인터다.
    echo $subject;
    echo $title;
    echo $PHP_tutorial;
    ?>
</body>
</html>