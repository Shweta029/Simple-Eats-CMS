<?php 
session_start();

?>
<!DOCTYPE>
<html>
	<head>
		<title >Admin Login</title>
<link rel="stylesheet" href="styles/login_style.css" media="all" /> 
<style>
	.body{
		background-image: url("images/adminbg4.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
	.login{
		width:350px;
		background-color: black;
		opacity:0.8;
		border: 2px solid grey;
		border-radius: 15px;
	}
</style>

</head>
<body class="body">
<div class="login">


<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
	
	<h1 color="blue">Login</h1>
    <form method="post" action="login.php">
    	<input type="text" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
    </form>
</div>


</body>
</html>
<?php 

include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		$email = $_POST['email'];
		$pass = $_POST['password'];
	
	$sel_user = "SELECT * from admins where user_email='$email' AND user_pass='$pass'";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
	}
	
	}
	

?>