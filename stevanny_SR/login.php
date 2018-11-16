<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Login User</h3>
					</div>
					<div class="panel-body">
						<form method="POST" action="proses_login.php">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button class="btn btn-primary" name="login">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>