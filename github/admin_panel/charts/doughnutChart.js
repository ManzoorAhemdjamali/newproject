
$(function() {
			var lineChart = $('#doughnutChart');
			var data1 = [20,25,28,36,48];
			var data2 = [18,24,32,40,64];

			


			var data = {
				labels:["C++","JAVA","PHP","javascript","python"],
				datasets:[
					{
						label:"first Programmer",
						data:data1,
						backgroundColor:["green","gray","skyblue","brown","blue"],
						
						
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