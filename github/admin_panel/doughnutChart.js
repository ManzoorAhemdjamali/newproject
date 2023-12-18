
$(function() {
			var lineChart = $('#doughnutChart');
			//var data1 = [56,50,42,44];
			

			


			var data = {
				labels:["6th","7th","8th","9th"],
				datasets:[
					{
						label:"first Programmer",
						data:data1,
						backgroundColor:["green","gray","skyblue","brown"],
						
						
					}
				]
			}
			var option = {
				title:{
					display:true,
					position:"top",
					text:"doughnut Chart"
				},
				lened:{
					display:true,
					position:"bottom"
				}
			}


			var lineObj = new Chart(lineChart,{
				type:"doughnut",
				data:data,
				options:option
			});

		});