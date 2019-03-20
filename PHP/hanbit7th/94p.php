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
  $i=0;
  $j=2;
  while ($i <= 9) {
    $k=$i*$j;
    echo "<td>$j X $i=</td><td>$k</td></tr><tr>";
    $i++;
  }
  ?>
  <p>
    <?
    $iii=0;
    while ($iii <= 10) {
      $ii=$ii+$iii;
      $iii=$iii+1;
    }

echo "$ii";
    ?>

</tr>
</table>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
