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
					<h4 class="text-primary"><i class="fa fa-plus-square"></i> Exam setup</h4><hr>
					<div class="container my-1">
						<div class="row">
							<div class="col-md-6">
								<div class="container form-group">
									<label class="font-weight-bold">Test Name</label>
									<input type="text" name="" placeholder="Test Name" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="container form-group">
									<label class="font-weight-bold">Class</label>
									<select class="form-control">
										<option>.....</option>
										<option>1st Class</option>
										<option>2nd Class</option>
										<option>3rd Class</option>
										<option>4th Class</option>
										<option>5th Class</option>
									</select>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="container form-group">
									<label class="font-weight-bold">Subject</label>
									<select class="form-control">
										<option>.....</option>
										<option>1st Class</option>
										<option>2nd Class</option>
										<option>3rd Class</option>
										<option>4th Class</option>
										<option>5th Class</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="container form-group">
									<label class="font-weight-bold">
										Value
									</label>
									<input type="number" name="" placeholder="Value" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="container form-group">
									<label class="font-weight-bold">
										Time (minutes)
									</label>
									<input type="number" name="" placeholder="Time" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="container form-group">
									<label class="font-weight-bold">
										Test Date
									</label>
									<input type="date" name=""  class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="container form-group">
									<label class="font-weight-bold">
										Time (from)
									</label>
									<input type="time" name=""  class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="container form-group">
									<label class="font-weight-bold">
										Time (up to)
									</label>
									<input type="time" name=""  class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="container my-1 text-center">
						<button class="btn btn-success">SAVE</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>