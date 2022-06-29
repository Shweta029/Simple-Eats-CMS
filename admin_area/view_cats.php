<style>
	.table{
		position: absolute;
		top:210px;
		left:250px;
		width:750px;
		height:350px;
		background-color: whitesmoke;
		opacity:0.7;
		
	}
</style>
<table width="1300" align="center" class="table"> 

	
	<tr  align="center" bgcolor="black" style="color: white" >
		<td colspan="6"><h2> All Categories </h2></td>
	</tr>
	
	<tr  align="center" bgcolor="black" style="color: white">
		<th>Category ID</th>
		<th>Category Title</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_cat = "select * from categories";
	
	$run_cat = mysqli_query($con, $get_cat); 
	
	$i = 0;
	
	while ($row_cat=mysqli_fetch_array($run_cat)){
		
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $cat_title;?></td>
		<td><a style="color: black" href="index.php?edit_cat=<?php echo $cat_id; ?>">Edit</a></td>
		<td><a style="color: black" href="delete_cat.php?delete_cat=<?php echo $cat_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>




</table>