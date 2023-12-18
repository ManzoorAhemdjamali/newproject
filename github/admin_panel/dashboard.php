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
				<div class="container bg-white shadow py-4 my-2">
					<div class="container my-2">
						<div class="row">
							<div class="col-md-4">
								<div class="container bg-primary text-white text-center shadow border p-2 my-1">
									<h4>192<br>Registered Student</h4>
								</div>
							</div>
							<div class="col-md-4">
								<div class="container bg-success text-white text-center shadow border p-2 my-1">
									<h4>32<br>Registered Subjects</h4>
								</div>
							</div>
							<div class="col-md-4">
								<div class="container bg-danger text-white text-center shadow border p-2 my-1">
									<h4>4<br>Registered Classes</h4>
								</div>
							</div>
						</div>
					</div>

					<div class="container my-2">
						<div class="row">
							<div class="col-md-6">
								<div class="container shadow border p-2 my-1">
									<canvas id="doughnutChart"></canvas>
									
								</div>
								
							</div>

							<div class="col-md-6">
								<div class="container shadow border p-2 my-1">
									<canvas id="barChart"></canvas>
									
								</div>
								
							</div>
							
						</div>
					</div>

					<div class="container my-2">
						<div class="row">
							<div class="col-md-12">
								<div class="container shadow border p-2 my-1">
									<h5 class="text-primary">
										<i class="fa fa-th"></i> 
										5 Recent Exams
									</h5><hr>

									<div class="table-responsive">
				<table class="table border">
					<thead>
						<tr>
							<th>Exam</th>
							<th>Class</th>
							<th>Subject</th>
							<th>Time (minutes)</th>
							<th>Value</th>
							<th>Date</th>
							<th>From</th>
							<th>To</th>
							
						
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
							
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							
						</tr>
						<tr>
							<td>Annual Examination-2020</td>
							<td>9th</td><td>English</td>
							<td>50</td><td>50</td>
							<td>12/10/2020</td>
							<td>11:00</td>
							<td>14:00</td>
							
						</tr>
						

						
						
						
					</tbody>
				</table>		
			</div>






								</div>
							</div>
							
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	

	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<script type="text/javascript">
		

		$(function() {
			var lineChart = $('#barChart');
			
			var sixth = [70,44,56];
			var seventh = [65,42,50];
			var eightth = [48,55,42];
			var ninth = [55,65,44];
			

			var data = {
				labels:["2018","2019","2020"],
				datasets:[
					{
						label:"6th",
						data:sixth,
						backgroundColor:"rgb(100,255,150)",
						borderColor:"rgb(100,255,150)",
						fill:false,
						lineTension:0,
						pointRadius:10
					},
					{
						label:"7th",
						data:seventh,
						backgroundColor:"gray",
						borderColor:"gray",
						fill:false,
						lineTension:0,
						pointRadius:10
					},
					{
						label:"8th",
						data:eightth,
						backgroundColor:"skyblue",
						borderColor:"skyblue",
						fill:false,
						lineTension:0,
						pointRadius:10
					},
					{
						label:"9th",
						data:ninth,
						backgroundColor:"brown",
						borderColor:"brown",
						fill:false,
						lineTension:0,
						pointRadius:10
					}
				]
			}
			var option = {
				title:{
					display:true,
					position:"top",
					text:"Last 3 year Students in classes",
					fontSize:20
				},
				lened:{
					display:true,
					position:"bottom"
				},
				scales: {
            		
            		yAxes: [{
                		ticks: {
                    		suggestedMin: 0,
                    		
                		}
            		}]
        		}
			}


			var lineObj = new Chart(lineChart,{
				type:"bar",
				data:data,
				options:option
			});

		});

	</script>
	<script type="text/javascript">
		
$(function() {
			var lineChart = $('#doughnutChart');
			var data1 = [56,50,42,44];
			

			


			var data = {
				labels:["6th","7th","8th","9th"],
				datasets:[
					{
						label:"first Programmer",
						data:data1,
						backgroundColor:["rgb(100,255,150)","gray","skyblue","brown"],
						
						
					}
				]
			}
			var option = {
				title:{
					display:true,
					position:"top",
					text:"Student in Class",
					fontSize: 25
				},
				leneds:{
					display:false,
					position:"bottom"
				}
			}


			var lineObj = new Chart(lineChart,{
				type:"doughnut",
				data:data,
				options:option
			});

		});
	</script>
</body>
</html>