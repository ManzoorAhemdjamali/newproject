
$(function() {
			var lineChart = $('#areaLineChart');
			var data1 = [45,25,85,30,60];
			var data2 = [18,24,32,40,64];

			


			var data = {
				labels:["C++","JAVA","PHP","javascript","python"],
				datasets:[
					{
						label:"first Programmer",
						data:data1,
						backgroundColor:"rgba(100,255,50,0.3)",
						borderColor:"rgb(100,255,50)",
						fill:true,
						lineTension:0,
						pointRadius:10
					}	
				]
			}
			var option = {
				
				title:{
					display:true,
					position:"top",
					text:"Line Chart",
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
            		}],
            		xAxes: [{
                		ticks: {
                    		suggestedMin: 0,
                    		
                		}
            		}]
        		}
			}


			var lineObj = new Chart(lineChart,{
				type:"line",
				data:data,
				options:option
			});

		});