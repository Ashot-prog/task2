<?php

$array = [];
$arrayLength = 20;

for ($i = 0; $i < $arrayLength; $i++) {
    $array[] = rand(1, 100);
}
echo '<pre>';
print_r($array);
echo '</pre>';
$arr = array_unique($array);

rsort($arr);






//sort($num);
//print_r($num);

?>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<table>
    <?php
    for($j=0; $j<count($arr); $j++) {?>
        <tr >
            <td style="width: 50px; text-align: center "><?php echo $j+1 ?></td>
            <td style="width: 50px; text-align: center "><?php echo $arr[$j] ?></td>
        </tr>
   <?php } ?>


</table>

</body>
</html>
