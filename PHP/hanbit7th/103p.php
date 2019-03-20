<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<table border="1px">
<tr>
  <?
  $i=0;//섭씨
  $j=2;//화씨
  for ($i=-30; $i <40 ; $i=$i+5) {
    $j=($i*9/5)+32;
  echo "<td>$i</td><td>$j</td></tr><tr>";
  }    ?>

</tr>
</table>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
