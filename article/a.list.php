<?php
	include('connect.php');
	$sqlList="select * from article";
	$reList=$mysqli->query($sqlList);
	while($rowList=$reList->fetch_assoc()){
		$rList[]=$rowList;
	}
	?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<title>全部文章显示</title>
			<meta charset="UTF-8"/>
			<script type="text/javascript" src="js/jquery.js" ></script>
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
			<script type="text/javascript" src="bootstrap/js/bootstrap.min.js" ></script>
		</head>
		<body>
			<table class="table">
					   <caption>文章列表</caption>
					   <thead>
					      <tr>
					         <th>标号</th>
					         <th>标题</th>
					         <th>作者</th>
					         <th>简介</th>
					   		<th>发布时间</th>
					    </tr>
					   </thead>
					   <tbody>
					   	<?php
					   		foreach($rList as $v){
					   	?>
					   		<tr>
					         <td><?php echo $v['id'];?></td>
					         <td><a href="a.show.php?id=<?php echo $v['id'];?>"><?php echo $v['title'];?></a></td>
					         <td><?php echo $v['author'];?></td>
					         <td><?php echo $v['description'];?></td>
					         <td><?php echo $v['dateline'];?></td>
					       </tr>
						<?php		
					   		}
					   		?>
					      <
					   </tbody>
					</table>

		</body>
	</html>