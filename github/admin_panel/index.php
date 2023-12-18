	<?php 
		include("include/head.php");

	?>


	<div class="container my-5">
		<div class="row">
			<div class="col-md-6 m-auto text-center">
				<img src="logo.png" height="100" width="100" class="img-fluid ">
				<h3>Welcome to admin panel</h3>
				<div class="container border shadow bg-white text-left py-4">
					<h4>Login Form</h4><hr>
					<div class="container my-2">
						<div class="form-group">
							<label class="font-weight-bold">User Name</label>
							<input type="text" class="form-control" name="" required="" placeholder="example123@gmail.com">
						</div>
						<div class="form-group">
							<label class="font-weight-bold">Password</label>
							<input type="text" class="form-control" name="" required="" placeholder="*********">
						</div>
						<div class="form-group my-5">
							
							<button type="submit" class="btn btn-primary btn-block login">Login</button>

							<a href="dashboard.php" class="btn btn-info btn-block">Move to dashboard</a>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</body>
</html>