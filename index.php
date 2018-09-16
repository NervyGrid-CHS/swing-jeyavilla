<!DOCTYPE html>
<html lang="en">
<head>
	<title>Madurai Food Guide</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<script type="text/javascript">
        window.history.forward();
        window.history.backward();
        function noBack()
        {
            window.history.forward();
            window.history.backward();
        }
</script>
</head>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login/images/img-01.png" style="border-radius: 50%" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title">
						Admin Login
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" id="username" name="username" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<input name="login" id="login" type="submit" class="login100-form-btn" value="Login">
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
						</span>
						<a class="txt2" href="#">
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="#">	
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login/vendor/select2/select2.min.js"></script>
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>
</body>
</html>
<?php 
session_start();
require_once('login/dbconnection.php');
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=($password);
$useremail=$_POST['username'];
$ret= mysqli_query($con,"SELECT * FROM admin WHERE user='$useremail' and pass='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dash.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
exit();
}
?>