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
					<h4 class="text-primary"><i class="fa fa-list"></i> Classes</h4><hr>
		<div class="container">
			<div class="row">
				
				<div class="col-md-6">
					<div class="container form-group">
						
						<input type="text" name="" placeholder="Class" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="container form-group">
						<button class="btn btn-success "><i class="fa fa-plus"></i> Submission</button>
					</div>
				</div>
			</div>
		</div><hr>


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
							<th>#</th><th>Class</th><th></th>
						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td><td>6th</td>
							<td>
								<a href="#" class="btn btn-info">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						<tr>
							<td>2</td><td>7th</td>
							<td>
								<a href="#" class="btn btn-info">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						<tr>
							<td>3</td><td>8th</td>
							<td>
								<a href="#" class="btn btn-info">
									<i class="fa fa-trash"></i>
								</a>
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