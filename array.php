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
    function get_array() {
        return ['ab', 'xd', 'ef', 'hi'];
    }
    $array = get_array();
    
    for($i = 0; $i < count($array); $i++) {
        //count($array);
        //count함수안에 array 변수를 파라미터로 넘기면
        //배열에 요소가 있는 갯수가 리턴된다. 
        echo ucfirst($array[$i]). '<br/>';
    }
    echo count($array).'<br>';

    $arr = ['a', 'b', 'c', 'd', 'e'];
    array_push($arr, 'f');
    var_dump($arr);
    ?>
</body>
</html>