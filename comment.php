<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <font color="#1b17e2" size="5">
    <b>Here is DVD's comment</b>
  </font>
  <div class="card" style="word-wrap:break-word">
  <div class="card-body">
    <?php
    include("db.php");
        $DVD_ID=(int)$_GET['DVD_ID']+1;
        $comment=GetComment($DVD_ID);
        for($i=0;$i<count($comment);$i++)
        {
        echo "<h4 class="."card-title".">".$i."</h4>";
        echo "<p class="."card-text".">".$comment[$i]['Comment_Text']."</p>";
        echo "<hr style="."border:1px dashed #000; height:1px"."</hr>";
        echo "<hr style="."border:1px dashed #000; height:1px"."</hr>";
        }
      ?>
        <h4 class="card-title"><?php echo count($comment); ?></h4>
        <p class="card-text">I'm comment.</p>

  </div>
</div>
</body>
</html>
