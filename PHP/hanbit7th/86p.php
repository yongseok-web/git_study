<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="" method="post">
      나이<input type="text" name="num1" value=""><br>
      <할인조건><br>
      <input type="radio" name="num2" value="6000">1710~입장<br>
      <input type="radio" name="num2" value="2000">국가유공자
  <br>    <input type="radio" name="num2" value="2000">복지카드소지자
  <br>    <input type="submit" name="" value="확인">
    </form>
    <?

    if ($num1<3) {
echo "무료";
    }
    elseif ($num1>2&&$num1<14) {
echo "4,000원";
$num2=6000;
    }
    elseif ($num2==6000) {
echo "4,000원";
$num2=6000;
    }
    elseif ($num1>13&&$num1<18) {
echo "8,000원";
$num2=2000;
    }
    elseif ($num1>69) {
echo "8,000원";
$num2=2000;
    }
    elseif ($num2==2000) {
echo "8,000원";
    }
    else{
echo "10,000원";
    }

echo "<p>$num1<br>$num2<br>$num3";


    ?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
