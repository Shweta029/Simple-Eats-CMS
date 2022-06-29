<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>Customer Panel</title>
	</head>
<style>
	.body{
		background-image: url("images/background.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	.main_wrapper{
		position: absolute;
		border: 3px solid black;
		width:100%;
		background-color:black;
		top:150px;
	}
	.div{
		border:5px solid black;
		background-color: black;
		position: absolute;
		left: 1200px;
		top: 0px;
		width: 236px;
		height: 520px;
		font-size:22px;
		font-weight: bold;
		color: black;
		opacity: 0.8;
		padding: 40px 30px 30px;
	}
	.welcome{
		position: absolute;
		left:450px;
		top:150px;
		font-size:22px;
		width:350px;
	}
</style>	
<body class="body">
			<div id="header">
				<p align="center" style="font-size: 150;color: whitesmoke;">CUSTOMER</p>
			</div>
	<!--Main Container starts here-->
	<div class="main_wrapper">
			<div class="div">
				<ul>
					<li><a href="my_account.php?my_orders">MY ORDERS</a></li><br>
					<li><a href="my_account.php?change_pass">CHANGE PASSWORD</a></li><br>
					<li><a href="my_account.php?delete_account">DELETE ACCOUNT</a></li><br>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</div>				
</div>
					
		
			<div id="content_area">
			
			<?php cart(); ?>
			
<div id="products_box" class="welcome">
								
<?php 
				if(!isset($_GET['my_orders'])){
					if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_pass'])){
							if(!isset($_GET['delete_account'])){
							
				echo "
				<h2 style='padding:20px;'>Welcome </h2>
				<b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
				}
			}
		}
	}
?>
				
				<?php 
				if(isset($_GET['edit_account'])){
				include("edit_account.php");
				}
				if(isset($_GET['change_pass'])){
				include("change_pass.php");
				}
				if(isset($_GET['delete_account'])){
				include("delete_account.php");
				}
				
				
				?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
	
	</div> 
<!--Main Container ends here-->


</body>
</html>