<style>
	.table{
		position: absolute;
		top:210px;
		left:0;
		width:1300px;
		height:150px;
		background-color: whitesmoke;
		opacity:0.7;
		border: 2px solid grey;
		border-radius: 15px;
	}
</style>
<table class="table" width="1300" align="center" style="color: black"> 

	
	<tr align="center" bgcolor="black" style="color: white">
		<td colspan="6"><h2 >All Orders</h2></td>
	</tr>
	
	<tr align="center" bgcolor="black" style="color: white">
		<th>S.N</th>
		<th>Food Item</th>
		<th>Price</th>
		<th>PRN</th>
	</tr>

	<?php 
	include("includes/db.php");
	
	$get_order = "SELECT * from orders_admin";
	
	$run_order = mysqli_query($con, $get_order); 
	
	$i = 0;
	
	while ($row_order=mysqli_fetch_assoc($run_order)){
		
		$order_id = $row_order['order_id'];
		$pro_id = $row_order['p_id'];
		$pro_name=$row_order['p_name'];
		$pro_price = $row_order['p_price'];
		$c_prn = $row_order['customer_prn'];
		$i++;
		
		
	
	echo '
	<tr align="center">
		<td>'.$i.'</td>
		<td>'.$pro_name.'</td>
		<td>'.$pro_price.'</td>
		<td>'.$c_prn.'</td>
	
	</tr>';

	 } ?>
</table>