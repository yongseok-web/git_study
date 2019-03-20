<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>▶ 연습문제 1</h2>
<form class="" action="" method="post">
  <input type="text" name="n1" value="">
  <input type="text" name="n2" value="">
  <input type="text" name="n3" value="">
  <input type="submit" name="" value="확인">
</form>
<?
if ($n1>$n2&&$n1>$n3) {
  echo "$n1,";// code...
  if ($n2>$n3) {
    echo "$n2,$n3";// code...
  }
    else {
      echo "$n3,$n2";// code...
    }
}
else {
  if ($n2>$n1&&$n2>$n3) {
    echo "$n2,";// code...
    if ($n1>$n3) {
      echo "$n1,$n3";// code...
    }
    else {
      echo "$n3,$n1";// code...
    }
  }
  else {
    if ($n3>$n2&&$n3>$n1) {
      echo "$n3,";// code...
      if ($n2>$n1) {
        echo "$n2,$n1";// code...
      }
      else {
        echo "$n1,$n2";// code...
      }
      }
}}
?>
<h2>▶ 연습문제 2</h2>
<form class="" action="" method="post">
  <input type="number" name="gr" value="" placeholder="숫자만 입력하시오." maxlength="3">
  <input type="submit" name="" value="확인">
</from>

<?
if ($gr<=100&&$gr>=91) {
$grd="수";
}
elseif ($gr<=90&&$gr>=81) {
$grd="우";
}elseif ($gr<=80&&$gr>=71) {
$grd="미";
}elseif ($gr<=70&&$gr>=61) {
$grd="양";
}elseif ($gr<=60&&$gr>=0) {
$grd="가";
}
else {
  echo "점수를 잘못 입력하셨습니다!";
}
echo "시험점수 $gr<br>등급 $grd";
?>
<h2>▶ 연습문제 3</h2>

<?
$a=1;
while ($a1 < 1000) {
$a1=$a*2;
$a++;
echo "$a1 ";

}
?>
<h2>▶ 연습문제 4</h2>
<?
$b=300;
$bs=0;
while ($b<=3000) {
  if (($b%2)==1) {
    $bs=$bs+$b;
  }
  else {
    $bs=$bs;
  }
$b++;
}
echo "300~3000 중 홀수의 합 $bs";
?>
<h2>▶ 연습문제 5</h2>
<?
for ($c=100; $c <=500 ; $c=$c+2) {
      echo "$c ";
      if (($c+2)%4==0) {
        echo "<br>";// code...
        // code...
      }
    }
?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
