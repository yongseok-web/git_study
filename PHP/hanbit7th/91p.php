<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="" method="post">
      <ul>
        <li>1학년 <input type="radio" name="g" value="1"></li><br>
        <li>2학년 <input type="radio" name="g" value="2"></li><br>
        <li>3학년 <input type="radio" name="g" value="3"></li><br>
        <li>4학년 <input type="radio" name="g" value="4"></li><br>
        <li>5학년 <input type="radio" name="g" value="5"></li><br>
        <li>6학년 <input type="radio" name="g" value="6"></li><br>
      </ul>
      <input type="submit" name="" value="확인"><br>
    </form>
<?
echo "$g 학년<p>";
switch ($g) {
  case '1':
echo "3만원";    break;
  case '2':
echo "3만 5천원";    break;
  case '3':
echo "4만원";    break;
  case '4':
echo "4만 5천원";    break;
  case '5':
echo "5만원";    break;
  case '6':
echo "5만 5천원";    break;

  default:
echo "학년을 잘못 입력했습니다.";
    break;
}


?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
