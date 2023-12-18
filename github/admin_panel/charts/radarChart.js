$(function() {
			var lineChart = $('#radarChart');
			var data1 = [20,25,28,36,48];
			var data2 = [18,24,32,40,64];

			


			var data = {
				labels:["C++","JAVA","PHP","javascript","python"],
				datasets:[
					{
						label:"first Programmer",
						data:data1,
						backgroundColor:"rgba(210,102,120,0.3)",
						borderColor:"rgb(210,102,120)",
						fill:true,
						lineTension:0,
						pointRadius:10
					},
					{
						label:"second Programmer",
						data:data2,
						backgroundColor:"rgba(120,12,210,0.3)",
						borderColor:"rgb(120,12,210)",
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
					text:"radar Chart",
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
				type:"radar",
				data:data,
				options:option
			});

		});
