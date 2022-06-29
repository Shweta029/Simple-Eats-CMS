<?php 
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<style>
	.table{
		position: absolute;
		top:205px;
		left: 260px;
		width:750px;
		height:300px;
		background-color: whitesmoke;
		opacity:0.7;
		border: 2px solid grey;
		border-radius: 15px;
	}
</style>
<table class="table"width="1300" align="center" style="color: black" border="10px"> 

	
	<tr align="center" bgcolor="black" style="color: white" >
		<td colspan="6"><h2 >All Products <h2></td>
	</tr>
	
	<tr align="center"  bgcolor="black" style="color: white"  >
		<th>S.N</th>
		<th>Title</th>
		<th>Price</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_pro = "select * from products";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $pro_title;?></td>
		<td><?php echo $pro_price;?></td>
		<td><a style="color: black" href="index.php?edit_pro=<?php echo $pro_id; ?>">Edit</td></a>
		<td><a style="color: black" href="delete_pro.php?delete_pro=<?php echo $pro_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>
</table>

<?php } ?>