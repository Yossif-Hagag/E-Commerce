<?php 
	session_start();
	$noNavbar = '';
	$pageTitle = 'Login';
	if(isset($_SESSION['username'])){
		header('Location: dashboard.php');//Redirect to Dashboard Page
	}
	include 'init.php';
	//check if user comming from HTTP POST request
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$hashedPass = sha1($password);
		//check if user exist in database
		$stmt = $db->prepare("SELECT id, username, password FROM users WHERE username = ? AND password = ? AND groupID = 1 LIMIT 1");
		$stmt->execute(array($username, $hashedPass));
		$row = $stmt->fetch(); 
		$count = $stmt->rowCount();
		//if count > 0 then database contain record about this username
		if($count > 0){
			$_SESSION['username'] = $username;//Register Session name
			$_SESSION['id'] = $row['id'];//Register Session id
			header('Location: dashboard.php');//Redirect to Dashboard Page
		}else if(! $username || ! $password){
			$emptyLogin = 
			'<div class ="alert alert-danger alert-dismissible fade show m-5" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
				</button>
				Enter Your Username and Password !
			</div>';
		}else{
			$failedLogin = 
			'<div class ="alert alert-danger alert-dismissible fade show m-5" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
				</button>
				Username and Password is incorrect
			</div>';
		}
	}
?>
<?php if(isset($emptyLogin)){echo $emptyLogin;}?>
<?php if(isset($failedLogin)){echo $failedLogin;}?>
<form class="login" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<h4 class="text-center">Admin Login</h4>
	<input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off">
	<input class="form-control" type="password" name="pass" placeholder="Password" autocomplete="new-password">
	<input class="btn btn-primary btn-block" type="submit" value="Login">
</form>
<?php include $tpl . 'footer.php';?>