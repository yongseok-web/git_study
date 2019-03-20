<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="" method="post">
      생년월일 <input type="date" name="num1" value="">
  <br>    <input type="submit" name="" value="확인"><br>ex)19930307
    </form>
<?
echo "$num1";
$day=20190313;
$c=$day-$num1;
echo "<br>$c";

if ($c>0) {
$d=floor($c/10000);
echo "{$d}세";
}

echo "<p>기준일: $day";

?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
