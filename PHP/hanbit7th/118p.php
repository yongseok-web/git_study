<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>▶ 연습문제 10</h2>
<?
for ($i1=2; $i1 <10 ; $i1++) {
  // code...
  for ($j1=1; $j1 <10 ; $j1++) {
    // code...
    $ij1=$i1*$j1;
    echo "{$j1}X{$i1}=$ij1 ";
    if ($j1==9) {
      echo "<br>";
      // code...
    }
  }
}
?>
<h2>▶ 연습문제 11</h2>
<table>
<tr>
  <div style="text-align: right; display: inline-block;">
  <?
  for ($i2=1; $i2<11 ; $i2++) {
    for ($j2=0; $j2<=$i2 ; $j2++) {
      if ($j2<$i2) {
        echo "*";
      }// code...
    }
    echo "<br>";
  }
  ?>
</div>
</td>
</table>
<h2>▶ 연습문제 12</h2>
<?
for ($i12=1; $i12 <1001 ; $i12++) {
  if ($i12%3==0) {
    $j12=$j12+$i12;
    // code...
  }
  // code...
}
echo "1~1000 중에서 3의 배수의 합: $j12";
?>
<h2>▶ 연습문제 13</h2>
<?
for ($i13=1; $i13 <801 ; $i13++) {
  if (!($i13%5==0)) {
    $j13=$j13+$i13;
    echo "$i13 까지의 합 $j13<br>";
    // code...
  }
  // code...
}
?>
<h2>▶ 연습문제 14</h2>
<table>
----------------------------<br>
<tr>
  <th>야드</th>
  <th>미터</th>
</tr>
----------------------------
</table>
<table>
  <?
  for ($i14=10; $i14 <=300 ; $i14=10+$i14) {
    // code...
    $j14=$i14*0.9144;
    echo "<tr><td>$i14</td><td>$j14</td></tr>";
  }
  ?>

</table>
----------------------------<br>

<h2>▶ 연습문제 15</h2>
<table border="1" width="150px">
<tr>
  <th>야드</th>
  <th>미터</th>
</tr>
  <?
  for ($i14=10; $i14 <=300 ; $i14=10+$i14) {
    // code...
    $j14=$i14*0.9144;
    echo "<tr><td>$i14</td><td>$j14</td></tr>";
  }
  ?>

</table>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
