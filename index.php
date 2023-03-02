<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Практика по логическому сравнению php </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <table>
        <caption> <h2>Задание 1. Таблица истинности PHP</h2></caption>
<thead>
<tr><th><strong>A</strong></th><th><strong>B</strong></th><th><strong>!A</strong></th><th><strong>A || B</strong></th><th><strong>A &amp;&amp; B</strong></th><th><strong>A xor B</strong></th></tr>
</thead>
<tbody>
<tr>
<?php
  $arr = [0, 0, 1, 0, 0, 1, 1, 1];
  for ($i = 0; $i < count($arr); $i+=2) {
      echo '<tr>';
      $a = $arr[$i];
      $b = $arr[$i+1];
      echo "<td>". $a . "</td>";
      echo "<td>". $b . "</td>";
      echo "<td>". (int)(!$a) . "</td>";
      echo "<td>". (int)($a or $b) . "</td>";
      echo "<td>". (int)($a and $b) . "</td>";
      echo "<td>". (int)($a xor $b) . "</td>";
      echo '</tr>';
  }
?>
</tbody>
</table>
  <table>
        <caption> <h2>Задание 2. Таблица сравнения. Гибкое сравнение в PHP</h2></caption>
<thead> 
<th><strong></strong></th><th><strong>true</strong></th><th><strong>false</strong></th><th><strong>1</strong></th><th><strong>0</strong></th><th><strong>-1</strong></th><th><strong>"1"</strong></th><th><strong>null</strong></th><th><strong>"php"</strong></th>
</thead>
<tbody>
<?php
  $arr = [true, false, 1, 0, -1, "1", null, "php"];
  for ($i = 0; $i < count($arr); $i++) {
    echo "<tr>";
    echo "<td>" . json_encode($arr[$i]) . "</td>";
    echo "<td>" . (int)($arr[$i] == $arr[0]) . "</td>";
    echo "<td>" . (int)($arr[$i] == $arr[1]) . "</td>";
    echo "<td>" . (int)($arr[$i] == $arr[2]) . "</td>";
    echo "<td>" . (int)($arr[$i] == $arr[3]) . "</td>";
    echo "<td>" . (int)($arr[$i] == $arr[4]) . "</td>";
    echo "<td>" . (int)($arr[$i] == $arr[5]) . "</td>";
    echo "<td>" . (int)($arr[$i] == $arr[6]) . "</td>";
    echo "<td>" . (int)($arr[$i] == $arr[7]) . "</td>";
    echo "</tr>";
  }
?>
</tbody>
</table>
  <table>
        <caption> <h2>Задание 2.1 Таблица сравнения. Жёсткое сравнение в PHP</h2></caption>
<thead> 
<th><strong></strong></th><th><strong>true</strong></th><th><strong>false</strong></th><th><strong>1</strong></th><th><strong>0</strong></th><th><strong>-1</strong></th><th><strong>"1"</strong></th><th><strong>null</strong></th><th><strong>"php"</strong></th>
</thead>
<tbody>
<?php
  $arr = [true, false, 1, 0, -1, "1", null, "php"];
  for ($i = 0; $i < count($arr); $i++) {
    echo "<tr>";
    echo "<td>" . json_encode($arr[$i]) . "</td>";
    echo "<td>" . (int)($arr[$i] === $arr[0]) . "</td>";
    echo "<td>" . (int)($arr[$i] === $arr[1]) . "</td>";
    echo "<td>" . (int)($arr[$i] === $arr[2]) . "</td>";
    echo "<td>" . (int)($arr[$i] === $arr[3]) . "</td>";
    echo "<td>" . (int)($arr[$i] === $arr[4]) . "</td>";
    echo "<td>" . (int)($arr[$i] === $arr[5]) . "</td>";
    echo "<td>" . (int)($arr[$i] === $arr[6]) . "</td>";
    echo "<td>" . (int)($arr[$i] === $arr[7]) . "</td>";
    echo "</tr>";
  }
?>
</tbody>
</table>
</body>
</html>