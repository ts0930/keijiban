<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link rel="stylesheet"  href="style.css">
<title>4eachblog掲示板</title>
</head>


<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
    $stmt = $pdo->query("select*from 4each_keijiban");

   
    ?>

　  <header>
        <img src="4eachblog_logo.jpg" alt="" class="logo">
        
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>


    </header>
<main>
    <div class="main-conntainer">
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>

            <form action="insert.php" method="post">
                <h2>入力フォーム</h2>
                <div class=text><label for="">ハンドルネーム</label>
                <br>
                <input type="text" name="handlename" size="45">
                </div>

                <div class=text><label for="">タイトル</label>
                <br>
                <input type="text" name="title" size="45"> 
                </div>

                <div class=text><label for="">コメント</label>
                <br>
                <textarea name="comments" cols="80" rows="7"></textarea> 
                 </div>

                <input type="submit" class="submit" value="送信する">
                


            </form>
<?php
while($row = $stmt->fetch()){
        echo "<div class='kiji'>";
           echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
           echo $row['comments'];
           echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
    echo "</div>";

                            } 
?>

        </div>
        <div class="right">
            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ　Top5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h2>オススメリンク</h2>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>

            </ul>
            <h2>カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>

        </div>
        
    </div>
    

<p></p>

</main>
<footer>
       copylight ©︎ internous | 4each blog the witch provides A to Z about programming
 </footer>
</body>

</html>