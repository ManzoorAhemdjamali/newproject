$(function() {
			var lineChart = $('#horizontalBarChart');
			var data1 = [20,25,28,36,48];
			var data2 = [18,24,32,40,64];

			


			var data = {
				labels:["C++","JAVA","PHP","javascript","python"],
				datasets:[
					{
						label:"first Programmer",
						data:data1,
						backgroundColor:"green",
						borderColor:"green",
						fill:false,
						lineTension:0,
						pointRadius:10
					},
					{
						label:"second Programmer",
						data:data2,
						backgroundColor:"blue",
						borderColor:"blue",
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
					text:"horizontalBar Chart",
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
				type:"horizontalBar",
				data:data,
				options:option
			});

		});
