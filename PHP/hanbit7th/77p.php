<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
    $num=15;
    $besu=3;
    $result="배수이";

    if ($num%$besu>0) {
      // code...
      $result="배수가 아니";
    }
    echo"$num 은 $besu 의 {$result}다<p>";

    if ($num%$besu==0) {
      echo "$num 은 $besu 의 배수다!";
    }
    else {
      echo "$num 은 $besu 의 배수가 아니다!";
    }
      ?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
