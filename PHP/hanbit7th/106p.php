<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>▶ 게시판 목록 보기</h2>
<table border="1px">
<tr>
  <th>번호</th>
    <th>제목</th>
      <th>글쓴이</th>
        <th>날짜</th>
  <?
  for ($i=1; $i <11 ; $i++) {
  echo "<tr><td>$i</td><td>게시판 제목 $i</td><td>홍길동</td><td>2013/03/10</td></tr>";
  }    ?>

</tr>
</table>
  </body>
</html>
<!--
! 참이면 거짓, 거짓이면 참
&& 엔드
|| 오어
