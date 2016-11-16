<html>
  <head>
	<title>我的留言板</title>
  </head>>
  <body>
     <center>
    	 <?php include ("menu.php"); ?>
    	 <hr width="90%"/> <!-- //wen题 -->
    	 <h3>查看留言</h3>
    	
         <table width="400" border="1">
            <tr>
               <th>留言标题</th>
               <th>留言人</th>
               <th>留言内容</th>
               <th>IP地址</th>
               <th>留言时间</th>
               <th>操作</th>
	    	</tr>
	    	<?php
            //获取留言信息，解析后输出到表格中
            $info = file_get_contents("liuyan.txt");
            //从留言文件中获取留言信息
            $info = rtrim($info,"@");
            // 以@@@符号拆分信息
            $lylist = explode("@@@", $info);
            //
            foreach ($lylist as $k=>$v) 
            {
            	$ly = explode("##", $v);
            	echo "<tr>";
            	echo "<td>{$ly[0]}</td>";
                echo "<td>{$ly[1]}</td>";
                echo "<td>{$ly[2]}</td>";
                echo "<td>{$ly[3]}</td>";
                echo "<td>".date('Y-m-d h:i:s',$ly[4])."</td>";
                echo "<td><a href='del.php?id={$k}'>删除</a><td>";
            	echo "</tr>";
            }
            //  
	    	?>	
	     </table>	
     </center>
  </body>
</html>
