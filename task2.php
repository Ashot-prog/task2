<?php
if (isset($_GET['num'])){
    echo 1;

}
if (isset($_GET['option'])){
    echo 2;
}
//$input = i
$array1=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
$array2=['0','1','2','3','4','5','6','7','8','9',]





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
<form action="task2.php" method="get">
    <div style="border: black solid 1px;
                width: 500px;
                height: 500px;">
        <input type="number" style="width: 250px;margin-left: 120px"  name="num" >
        <div id="emailHelp" style="text-align: center">Տողի մեջ տեղադրել</div>
        <select style="margin-left:  150px" name="option"aria-label="Default select example">
            <option name="tver">Tver</option>
            <option name="tarer">Tarer</option>
            <option name="tvertarer">Tver ev Tarer</option>
        </select>
        <input type="submit" >
    </div>

</form>
</body>
</html>
