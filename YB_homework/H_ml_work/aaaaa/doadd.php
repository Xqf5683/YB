
<html>
  <head>
	<title>我的留言板</title>
  </head>>
  <body>
    <center>
    	<?php include ("menu.php"); ?>
    	<hr width="90%"/> <!-- //wen题 -->
    	<h3>添加留言</h3>
         <?php
          //获取信息

          $title = $_POST["title"];
          $author = $_POST["author"];
          $content = $_POST["content"];
          $ip = $_SERVER["REMOTE_ADDR"];
          $addtime = time();
          //组装信息
          $ly = "{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";
          //echo "$ly";
          //将信息追加到liuyan.txt文件中
          $info = file_get_contents("liuyan.txt");
          file_put_contents("liuyan.txt",$info.$ly);
          //输出留言成功
          echo "留言成功";
         ?>  
       
    <center>


    </center>
    

  </body>
</html>

