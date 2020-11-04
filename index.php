<!--index.html 은 대문 페이지다 -->
<!--
localhost/index.php
-->

<!DOCTYPE html>
<html lang="Study">
<head>
    <title></title>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/style.css">

</head>
<body id="target">
    <header>
    <img src="http://localhost/image/APlogo.png" alt="AP">
        <h1><a href="http://localhost/index.php">StudyHow</a></h1>
  </header>
    <nav>
        <ol>
        </ ol>
    </nav>
  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
  </div>
    <div id="language">
        <input type="button" value="한국어" onclick="document.getElementById('target').className='white'"/>
        <input type="button" value="ENGLISH" onclick="document.getElementById('target').className='black'" />
    </div>
  <article>
  </article>
</body>
</html>