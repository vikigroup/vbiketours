<?php
	
	@define ( '_lib' , '../admin/lib/');
	include_once "config.php";
	include_once "class.database.php";
	include_once "functions.php";
	
	$d = new database($config['database']);
	
	@$ten = $_POST['name'];
	@$id_pro_sub = $_POST['sub_id'];
@$email= $_POST['email'];
	@$noidung =  $_POST['comment'];
	@$id_pro = $_POST['id'];
	@$ngaydang = date("Y-m-d");
	@$ngaydang1 = date("d-m-Y h:i:s A");
		$d->reset();
		$sql="INSERT INTO #_blog_comment (id_blog,ten,noidung,ngaytao,email,parentid) VALUES ('".$id_pro."', '".$ten."', '".$noidung."', '".$ngaydang."','".$email."','".$id_pro_sub."');";		
		$d->query($sql);	
		
			@$html = '
			<ul class="deblog_load_comemt">
<li class="deblog_comm" style=""><p class="photo_comm_name">'.$ten.' </p>
<p class="photo_comm_name">'.$email.' </p>
<p class="photo_com_date">'.$ngaydang1.'</p>
</li><li class="deblog_comm"style="">'.$noidung.'</li>	
</ul>';	
			
			echo $html;
?>