<html>
  <head>
	<title>我的留言板</title>
  </head>>
  <body>
     <center>
    	 <?php include ("menu.php"); ?>
    	 <hr width="90%"/> <!-- //wen题 -->
    	 <h3>删除留言</h3>
    	
         <table width="400" border="1">
            
	    	<?php
            //执行删除任务
            //获取要删除的id
            $id = $_GET["id"];
            //从留言文件中获取留言信息
            $info = file_get_contents("liuyan.txt");

            // 以@@@符号拆分信息
            $lylist = explode("@@@", $info);

            //使用unset删除
            unset($lylist[$id]);
            //还原留言信息为字串并写回留言文件
            $ninfo = implode("@@@", $lylist);
            file_put_contents("liuyan.txt",$ninfo);
            echo "删除成功";
	    	?>	
	     </table>	
     </center>
  </body>
</html>

