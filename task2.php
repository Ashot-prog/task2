<?php

$array1=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$array2=[0,1,2,3,4,5,6,7,8,9];
//echo $_GET['num'];
//echo $_GET['option'];

function buildString($length, $array)
{
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= $array[rand(0, count($array) - 1)];
    }

    return $string;
}

function generate ($num,$type,$array1,$array2)
{
    if ($type === 'num') {
        buildString($num,$array2);
    } elseif ($type === 'str') {
        buildString($num,$array1);
    } elseif ($type === 'num&str') {
        numberString($array1,$array2,$num );
    }
}

    function numberString($array1,$array2,$num){
        $array = array_merge($array1, $array2);
        for ($i = 0; $i < $num; $i++) {
            echo  $rand[$i] = $array[rand(0, count($array) - 1)];

        }
        echo '<br>';
        $i=0;
        $k = 0;
        for ($j = 0; $j < count($rand); $j++) {
            if (is_integer($rand[$j])) {
                $int[$i] = $rand[$j];
                $i++;
            } else {
                $str[$k] = $rand[$j];
                $k++;
            }

        }
//            print_r($int);
        if (isset($int)) {
            for ($j = 0; $j < count($int); $j++) {
                echo $int[$j];

            }
            echo '<br>';
        }
        if (isset($str)) {
            for ($j = 0; $j < count($str); $j++) {
                echo $str[$j];

            }
        }
    }






//$input = i
if (isset($_POST['num']) && isset($_POST['option'])) {
     generate($_POST['num'],$_POST['option'],$array1,$array2);
}






    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="task2.php" method="post">
    <div style="border: black solid 1px;
                width: 500px;
                height: 500px;">
        <input type="number" style="width: 250px;margin-left: 120px"  name="num" >
        <div id="emailHelp" style="text-align: center">Տողի մեջ տեղադրել</div>
        <select style="margin-left:  150px" name="option"aria-label="Default select example">
            <option value="num">թվեր</option>
            <option value="str">տառեր</option>
            <option value="num&str">թվեր եւ տառեր</option>
        </select>
        <input type="submit" value="գեներացնել">
    </div>

</form>
</body>
</html>
