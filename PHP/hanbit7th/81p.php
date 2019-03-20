<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="num1" value="">
      <input type="text" name="num2" value="">
      <input type="text" name="num3" value="">
      <input type="submit" name="" value="확인">
    </form>
    <?
    // $num1=50;
    // $num2=51;
    // $num3=52 ;

      echo "1:$num1 <br>2: $num2<br>3: $num3<br>";
if (!(($num1==$num2)||($num1==$num3)||($num3==$num2))) {
  if ($num1<$num2 && $num3<$num2) {
    echo "$num2,";
    if ($num1<$num3) {
      echo "$num3,$num1";
    }
    else {
      echo "$num1,$num3";
    }
  }
  else {
    if ($num1>$num2 && $num3<$num1) {
      echo "$num1,";
      if ($num2<$num3) {
        echo "$num3,$num2";
      }
      else {
        echo "$num2,$num3";
      }
    }
    else {
      if ($num3>$num2 && $num3>$num1) {
        echo "$num3,";
        if ($num2<$num1) {
          echo "$num1,$num2";
        }
        else {
          echo "$num2,$num1";
        }
      }
    }
  }
}
else {
  echo "같은 수가 있습니다.";
}
      ?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
