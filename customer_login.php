
<html>
<head>
	<?php 
			session_start();
			include("includes/db.php");
			if(isset($_POST['login'])){
			
				$c_prn = $_POST['prn'];
				$c_pass = $_POST['pass'];
				
				$sel_c = "SELECT * from customers where customer_pass='$c_pass' AND customer_prn='$c_prn'";
				
				$run_c = mysqli_query($con, $sel_c);
				
				$check_customer = mysqli_num_rows($run_c); 
				
				if($check_customer==0){
				
				echo "<script>alert('PRN or password is incorrect, please try again!')</script>";
				
				}
				
				 
				
				if($check_customer>0 ){
				
				$_SESSION['customer_email']=$c_prn; 
				

				header("location: index.php");
				}
				
			}
			
			
?>
<title>LOGIN</title>
    <script src="https://use.typekit.net/ayg4pcz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

	<link rel="stylesheet" href="styles/style.css" media="all" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
       	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       	<meta charset="utf-8">
      	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      	<meta name="description" content="">
      	<meta name="author" content="">
      	<link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
      	<link href="themes/assets/css/carousel.css" rel="stylesheet">

	<style type="text/css">			
		body, html {
		height: 100%;
		background-image: url("images/custbg2.jpeg");
		background-repeat: no-repeat;
		background-size: cover;
		}

		.login_box{
		    background:#f7f7f7;
		    border:3px solid #F4F4F4;
		    padding-left: 15px;
		    margin-bottom:25px;
		    }
		.input_title{
		    color:rgba(164, 164, 164, 0.9);
		    padding-left:3px;
		    margin-bottom: 2px;
		    }

		hr{
		    width:100%;
		}

		.login_title{
		    font-family: "myriad-pro",sans-serif;
		    font-style: normal;
		    font-weight: 100;
		    color:rgba(164, 164, 164, 0.44);
		}

		.card-container.card {
		    max-width: 350px;

		}
		
		.btn {
		  display: inline-block;
		  font-weight: normal;
		  text-align: center;
		  white-space: nowrap;
		  vertical-align: middle;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		  border: 1px solid transparent;
		  padding: 0.5rem 0.75rem;
		  font-size: 1rem;
		  line-height: 1.25;
		  border-radius: 0.25rem;
		  transition: all 0.15s ease-in-out;
		}

		.btn:focus, .btn:hover {
		  text-decoration: none;
		}

		.btn:focus, .btn.focus {
		  outline: 0;
		  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
		}

		/*
		 * Card component
		 */
		.card-container {
		    background-color: black;
			opacity:0.5;
		    padding: 1px 25px 30px;
		    margin: 100px auto 25px;
			width:350px;
		    -moz-border-radius: 2px;
		    -webkit-border-radius: 2px;
		    border-radius: 2px;
		    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}

		.profile-img-card {
		    width: 96px;
		    height: 96px;
		    margin: 0 auto 10px;
		    display: block;
		    -moz-border-radius: 50%;
		    -webkit-border-radius: 50%;
		    border-radius: 50%;
		}

		/*
		 * Form styles
		 */
		.profile-name-card {
		    font-size: 16px;
		    font-weight: bold;
		    text-align: center;
		    margin: 10px 0 0;
		    min-height: 1em;
		}

		.reauth-email {
		    display: block;
		    color: #404040;
		    line-height: 2;
		    margin-bottom: 10px;
		    font-size: 14px;
		    text-align: center;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		    -moz-box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    box-sizing: border-box;
		}

		.form-signin #inputEmail,
		.form-signin #inputPassword {
		    direction: ltr;
		    height: 44px;
		    font-size: 16px;
		}

		.form-signin input[type=email],
		.form-signin input[type=password],
		.form-signin input[type=text],
		.form-signin button {
		    width: 100%;
		    display: block;

		    z-index: 1;
		    position: relative;
		    -moz-box-sizing: border-box;
		    -webkit-box-sizing: border-box;
		    box-sizing: border-box;
		}

		.form-signin .form-control:focus {
		    border-color: rgb(104, 145, 162);
		    outline: 0;
		    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
		}

		.btn.btn-signin {
		    /*background-color: #4d90fe; */
		    background-color: rgb(104, 145, 162);
		   /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
		    padding: 0px;
		    font-weight: 700;
		    font-size: 18px;
		    height: 36px;
		    -moz-border-radius: 3px;
		    -webkit-border-radius: 3px;
		    border-radius: 3px;
		    border: none;
		    -o-transition: all 0.218s;
		    -moz-transition: all 0.218s;
		    -webkit-transition: all 0.218s;
		    transition: all 0.218s;
		}

		.btn.btn-signin:hover,
		.btn.btn-signin:active,
		.btn.btn-signin:focus {
		    background-color: rgb(12, 97, 33);
		}

		.forgot-password {
		    color: rgb(104, 145, 162);
		}
		.btn-success {
		  color: #fff;
		  background-color: #28a745;
		  border-color: #28a745;
		}

		.btn-success:hover {
		  color: #fff;
		  background-color: #218838;
		  border-color: #1e7e34;
		}

		.btn-success:focus, .btn-success.focus {
		  box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.5);
		}

		.btn-success.disabled, .btn-success:disabled {
		  background-color: #28a745;
		  border-color: #28a745;
		}

		.btn-success:active, .btn-success.active,
		.show > .btn-success.dropdown-toggle {
		  background-color: #218838;
		  background-image: none;
		  border-color: #1e7e34;
		}


		.forgot-password:hover,
		.forgot-password:active,
		.forgot-password:focus{
		    color: rgb(12, 97, 33);
		}
</style>
</head>

	<body class="body">

		<!--Navigation Bar starts-->
		<div class="navbar " role="navigation">
		    	<h2 style="color: black" align="center">Canteen Management System</h2>
       	</div>
		<!--Navigation Bar ends-->
	
	<div class="container">
        <div class="card-container">
        	<h2 class='login_title text-center' align="center" style="color: darkgrey">Login using your PRN NUMBER</h2>
       

            <form class="form-signin" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">PRN</p>
                <input type="text" name="prn" class="login_box" placeholder="ex:115A1011" required autofocus>
                <p class="input_title">Password</p>
                <input type="password" name="pass" class="login_box" placeholder="ex:*****" required>
                <div id="remember" class="checkbox">
                    
                </div>
                <center><input class="btn btn-lg btn-signin" type="submit" name="login" style="color: white" value="Login"></center>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
		

				
			<h2 align="center"><a href="customer_register.php"><button type="button" class="btn btn-success" name="">New? Register Here</button></a></h2>
			
	</body>
</html>