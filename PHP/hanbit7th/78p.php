<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="w" value="">
      <input type="text" name="h" value="">
      <input type="submit" name="" value="확인">
    </form>
    <?
    // $w=115;
    // $h=170;
    $c=($h-100)*0.9;

      echo "몸무게: $w<br>키: $h<br>";

    if ($w>=$c) {
      echo "다이어트가 필요합니다.";
    }
    else {
      echo "다이어트가 필요 없습니다.";
    }
      ?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
