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
				<div class="container bg-white shadow py-2 my-2">
					<h4 class="text-primary"><i class="fa fa-th"></i> Exams</h4><hr>
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
				<table class="table border">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Class</th>
							<th>Subject</th>
							<th>Time (minutes)</th>
							<th>Value</th>
							<th>Date</th>
							<th>Time(from)</th>
							<th>Time(upto)</th>
							<th></th>
						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							<td>
								<div class="form-group">
									<a class="btn btn-success mb-1" href="edit_exam.php">
										<i class="fa fa-edit"></i>
									</a>
									<button class="btn btn-danger mb-1"><i class="fa fa-trash"></i></button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							<td>
								<div class="form-group">
									<a class="btn btn-success mb-1" href="edit_exam.php">
										<i class="fa fa-edit"></i>
									</a>
									<button class="btn btn-danger mb-1"><i class="fa fa-trash"></i></button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							<td>
								<div class="form-group">
									<a class="btn btn-success mb-1" href="edit_exam.php">
										<i class="fa fa-edit"></i>
									</a>
									<button class="btn btn-danger mb-1"><i class="fa fa-trash"></i></button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							<td>
								<div class="form-group">
									<a class="btn btn-success mb-1" href="edit_exam.php">
										<i class="fa fa-edit"></i>
									</a>
									<button class="btn btn-danger mb-1"><i class="fa fa-trash"></i></button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							<td>
								<div class="form-group">
									<a class="btn btn-success mb-1" href="edit_exam.php">
										<i class="fa fa-edit"></i>
									</a>
									<button class="btn btn-danger mb-1"><i class="fa fa-trash"></i></button>
								</div>
							</td>
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							<td>
								<div class="form-group">
									<a class="btn btn-success mb-1" href="edit_exam.php">
										<i class="fa fa-edit"></i>
									</a>
									<button class="btn btn-danger mb-1"><i class="fa fa-trash"></i></button>
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