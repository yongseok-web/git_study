<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>▶ 연습문제 6</h2>
<?
for ($i=100; $i <=900 ; $i++) {
if ($i%2==0) {
  $j=$j+$i;
  echo "$i 까지의 합 $j<br>";
  // code...
}

}
?>
<h2>▶ 연습문제 7</h2>
<?
$ij=1;
for ($ii=1; $ii <11 ; $ii++) {
  $ij=$ij*$ii;
}
echo "10!=$ij";
?>
<h2>▶ 연습문제 8</h2>
<?
for ($i8=1; $i8<501 ; $i8++) {
if ($i8%2==1) {
echo "$i8 ";  // code...
}  // code...
if ($i8%10==9) {
  echo "<br>";  // code...
}
}
?>
<h2>▶ 연습문제 9</h2>
<?
$ij9=0;
for ($i9=1; $i9 < 1001; $i9++) {
if (!($i9%3==0)) {
echo "$i9 ";
$ij9++;
if ($ij9==10) {
echo "<br>";
$ij9=0;  // code...
}
}
}
  // code...

?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
