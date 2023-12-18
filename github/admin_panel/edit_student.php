<?php
	include("include/head.php");
	include("include/navbar.php");
?>
	<div class="container-fluid">
		<div class="row">
			<?php
				include("include/sidebar.php");
			?>
			<div class="col-md-9  my-4">
				<div class="container bg-white shadow py-2 ">
					<h4 class="text-primary"><i class="fa fa-user"></i> Correction of student information</h4><hr>
					<div class="container my-3">
						<div class="row">
							<div class="col-md-6">
								<div class="container form-group">
									<label class="font-weight-bold">Name of the student</label>
									<input type="text" name="" value="Kashif Ali" placeholder="Student Name" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="container form-group">
									<label class="font-weight-bold">Father's Name</label>
									<input type="text" name="" value="Abdul Raheem" placeholder="Fathers Name" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="font-weight-bold">Class</label>
												<select class="form-control">
													<option>One</option>
													<option>Two</option>
													<option>Three</option>
													<option>Fourth</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="font-weight-bold">Branch</label>
												<input type="text" name="" value="Pre Medical" placeholder="Branch Name" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="container">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="font-weight-bold">Roll Number</label>
												<input type="text" name="" value="1241" placeholder="ROll number" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="font-weight-bold">Mobile Number</label>
												<input type="number" name="" value="031020120" placeholder="Mobile Name" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="container">
									<div class="custom-file">
										<label class="custom-file-label">Browse</label>
										<input type="file" name="img" class="custom-file-input">
									</div>
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="container">
									<img src="img.img" alt="Image File">
								</div>
							</div>
						</div>
					</div>
					<div class="container text-center my-3">
						<button class="btn btn-success"><i class="fa fa-update"></i> Update</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>