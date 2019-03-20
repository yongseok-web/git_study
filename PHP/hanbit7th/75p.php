<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
    $pilgi=95;
    $silgi=85;
    $result="합격";

    if($pilgi<70 || $silgi<80)
    {$result="불합격";}
    echo"필기점수: $pilgi, 실기점수: $silgi<br>";
    echo"결과: $result";
      ?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
