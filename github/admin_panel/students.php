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
					<h4 class="text-primary"><i class="fa fa-check-circle"></i> Student List</h4><hr>
					<div class="container">
						<div class="container my-1">
							<div class="row">
								<div class="col-12">
									<span class="">
										Show
										<span>
											<select class="">
												<option>10</option>
												<option>25</option>
												<option>50</option>
												<option>100</option>
												<option>500</option>
											</select>
										</span>entries 
										<span class="float-right">
											<input type="text" name="" placeholder="Search..." class="form-control">
										</span>
									</span>
								</div>
							</div>
						</div>
						<div class="container table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>Class</th>
										<th>Branch</th>
										<th>Number of students</th>
										<th></th>
						
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td><td>Pre medical</td><td>112</td>
										<td>
											<div class="form-group">
												<a href="student_group.php" class="btn btn-info">
													<i class="fa fa-folder"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>1</td><td>Pre medical</td><td>112</td>
										<td>
											<div class="form-group">
												<a href="student_group.php" class="btn btn-info">
													<i class="fa fa-folder"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>1</td><td>Pre medical</td><td>112</td>
										<td>
											<div class="form-group">
												<a href="student_group.php" class="btn btn-info">
													<i class="fa fa-folder"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>1</td><td>Pre medical</td><td>112</td>
										<td>
											<div class="form-group">
												<a href="student_group.php" class="btn btn-info">
													<i class="fa fa-folder"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>1</td><td>Pre medical</td><td>112</td>
										<td>
											<div class="form-group">
												<a href="student_group.php" class="btn btn-info">
													<i class="fa fa-folder"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>1</td><td>Pre medical</td><td>112</td>
										<td>
											<div class="form-group">
												<a href="student_group.php" class="btn btn-info">
													<i class="fa fa-folder"></i>
												</a>
											</div>
										</td>
									</tr>
									
									
								</tbody>
							</table>		
						</div>
						<div class="container py-2">
							<div class="row">
								<div class="col-md-6">
									Showing 1 to 10 of 1000 entries 
								</div>
								<div class="col-md-6">
									<ul class="pagination">
										<li class="page-item"><a href="#" class="page-link">Previous</a></li>
										<li class="page-item"><a href="#" class="page-link active">1</a></li>
										<li class="page-item"><a href="#" class="page-link">Next</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>