<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row  justify-content-center">
			<div class="col-md-6">
				<?php

				//nếu đã login thì ko hiển thị form để login
				if(isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['username'] == "admin" && $_SESSION['password'] == "111111"){
						echo "Bạn đã login.";
				}
				else{ //chưa login
				?>
					<h2>User Login</h2>
					<?php

					//login sai acc
					if(isset($_COOKIE['error'])){
						echo '<div class="alert alert-danger">'.$_COOKIE['error'].'</div>';

					}
					?>
					
					<form method="POST" action="xuly.php">
						<div class="form-group">
							<div class="col-sm-3">
								<label class="form-control-label">Username</label>
							</div>
							<div class="col-md-9">
								<input type="text" name="username" class="form-control" placeholder="Enter username" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-3">
								<label class="form-control-label">Password</label>
							</div>
							<div class="col-md-9">
								<input type="password" name="password" class="form-control" placeholder="Enter your pw" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-9">
								<label><input type="checkbox" name="remember" value="1"> Remember me?</label>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" name="btnSend" class="btn btn-primary">Login</button>
						</div>

					</form>
				<?php
				}
				?>
			</div>
		</div>
		
	</div>
</body>
</html>