<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="text" name="s" value="">
      <input type="submit" name="" value="확인">
    </form>
    <?
    // $w=115;
    // $h=170;

      echo "점수: $s<br>등급: ";

    if ($s>100){
      echo "에러입니다.";
    }
    elseif($s<=100 && $s>=95) {
      echo "A+";
    }
    elseif ($s>89) {
      echo "A0";
    }
    elseif ($s>84) {
      echo "B+";
    }
    elseif ($s>79) {
      echo "B0";
    }
    elseif ($s>74) {
      echo "C+";
    }
    elseif ($s>69) {
      echo "C0";
    }
    elseif ($s>64) {
      echo "D+";
    }
    elseif ($s>59) {
      echo "D0";
    }
    elseif ($s>0) {
      echo "F";
    }
     else {
       echo "에러입니다.";
      // code...
    }
      ?>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
