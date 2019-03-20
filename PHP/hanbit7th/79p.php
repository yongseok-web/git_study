<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
    $p=60;
    $s=90;
    $d=90;

      echo "필기: $p<br>실기: $s<br>도로주행: $d<br>";

    if ($p<70 || $s<80 || $d<90) {
      echo "불합격입니다.";
    }
    else {
      echo "합격입니다.";
    }
      ?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
