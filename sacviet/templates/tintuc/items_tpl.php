<script type="text/javascript">

function doEnter(evt){

	// IE					// Netscape/Firefox/Opera

	var key;

	if(evt.keyCode == 13 || evt.which == 13){

		onSearch(evt);

	}

}

function onSearch(evt) {	

		var keyword = document.getElementById("keyword").value;		

		//var encoded = Base64.encode(keyword);

		location.href = "index.php?com=news&act=man&keyword="+keyword;

		loadPage(document.location);

			

}



</script>
<h3><a href="index.php?com=news&act=add">Thêm tin tức</a></h3>
Tìm kiếm: <input name="keyword" id="keyword" type="text" /> <input type="button" value=" Tìm "  onclick="onSearch(event)"/>
<a href="index.php?com=news&amp;act=man_comments">Quản lý comments</a>
<table class="blue_table">

	<tr>
		<th style="width:5%;">Stt</th>
        <th style="width:50%;">Tên</th>
	  <th style="width:5%;">Hiển thị</th>
		<th style="width:5%;">Sửa</th>
		<th style="width:5%;">Xóa</th>
	</tr>
    
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
		<td style="width:5%;" align="center"><?=$items[$i]['stt']?></td>
        <td style="width:50%;" align="center"><a href="index.php?com=news&act=edit&id_cat=<?=$items[$i]['id_cat']?>&id_item=<?=$items[$i]['id_item']?>&id=<?=$items[$i]['id']?>" style="text-decoration:none;"><?=$items[$i]['ten_vi']?></a></td>

<td style="width:5%;">
        
       
		
		<?php 
		if(@$items[$i]['hienthi']==1)
		{
		?>
        <a href="index.php?com=news&act=man&hienthi=<?=$items[$i]['id']?>"><img src="media/images/active_1.png"  border="0"/></a>
		<? 
		}
		else
		{
		?>
         <a href="index.php?com=news&act=man&hienthi=<?=$items[$i]['id']?>"><img src="media/images/active_0.png" border="0" /></a>
         <?php
		 }?>        </td>

		<td style="width:5%;" align="center"><a href="index.php?com=news&act=edit&id_cat=<?=$items[$i]['id_cat']?>&id_item=<?=$items[$i]['id_item']?>&id=<?=$items[$i]['id']?>"><img src="media/images/edit.png"  border="0"/></a></td>
		<td style="width:5%;"><a href="index.php?com=news&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" /></a></td>
	</tr>
	<?php	}?>
</table>
<a href="index.php?com=news&act=add"><img src="media/images/add.jpg" border="0"  /></a>

<div class="paging"><?=$paging['paging']?></div>