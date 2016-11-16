<html>
  <head>
	<title>我的留言板</title>
  </head>>
  <body>
    <center>
        <?php include ("menu.php"); ?>
    	<hr width="90%"/> <!-- //wen题 -->
    	<h3>添加留言</h3>
    	<form action="doadd.php" method="post" >
	    	<table width="400" border="1">
		    	<tr>
		    		<td>标题:</td>
		    		<td><input type="text" name="title"></td>
		    	</tr>
		        <tr>
		    		<td>留言者:</td>
		    		<td><input type="text" name="author"></td>
		    	</tr>
		    	<tr>
		    		<td>留言内容:</td>
		    		<td><textarea  name="content" rows="5" cols="30" ></textarea></td>
		    	</tr>
		    	<tr>
		    		
		    		<td>
		    			<input type="submit" value="提交" >
		    		</td>
		    		<td>
		    			<input type="reset" value="重置" >
		    		</td>
		    	</tr>

	    		
	    	</table>
    	</form>
    <center>


    </center>
    

  </body>
</html>

