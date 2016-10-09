<?php
		require_once "db.php";
    require_once "functions.php";
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>LOGIN PAGE - UPDATE</title>

		<link rel="stylesheet" href="css/bootstrap.min.css"	>

	<body>
		<div id="" class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
						<form id="" class="" method="post" action="login-update.php">
							<div class="form-group">
								<label id="" for="user-name">Username</label>
								<input type="text" id="user-name" class="form-control" name="username">
							</div>

							<div class="form-group">
								<label for="user-password">Password</label>
								<input type="password" id"user-password" class="form-control" name="password">
							</div>

              <div class="form-group">
                <select id="" class="" name="id">
                    <?php showAllData()?>
                </select>
              </div>

							<div class="form-group">
								<input type="submit" id="" name="update" class="btn btn-success" value="Update">
				       </div>
						</form>
				</div>
			</div>
		</div>
</body>
</html>
