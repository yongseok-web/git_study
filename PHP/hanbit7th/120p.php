<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>▶ 연습문제 16</h2>
<?
psss;
?>
<h2>▶ 연습문제 17</h2>
<table border="1" width="150px">
<tr>
  <th>제곱미터</th>
  <th>평</th>
</tr>
  <?
  for ($i14=1; $i14 <=200 ; $i14++) {
    // code...
    $j14=$i14*0.3025;
    echo "<tr><td>$i14</td><td>$j14</td></tr>";
  }
  ?>

</table>

<h2>▶ 연습문제 21</h2>
<?
  $j21=0;
for ($i21=1; $i21 <=1000 ; $i21++) {
  // code...
if ($i21%9==0) {
  $j21=$j21+1;
  // code...
}
}
echo "$j21 개";
?>
<h2>▶ 연습문제 22</h2>
<?
for ($i22=200; $i22 <=1000 ; $i22++) {
  $ij22=0;
  for ($j22=1; $j22 <=1000 ; $j22++) {
    // code...
    if ($i22%$j22==0) {
      $ij22=$ij22+1;
      // code...
    }
  }
  if ($ij22==2) {
    echo "$i22, ";
    // code...
  }
}
?>
<h2>▶ 연습문제 23</h2>
<?
$i23_3=0;
$i23_7=0;
for ($i23=200; $i23 <=1000 ; $i23++) {
  // code...
  if ($i23_7%7==0) {
    $i23_7=$i23_7+$i23;

    // code...
  }
  if ($i23%3==0) {
    $i23_3=$i23_3+$i23;
    // code...
  }
}
echo "3의 배수의 합: $i23_3<br>";
echo "7의 배수의 합: $i23_7";

?>
<br>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
