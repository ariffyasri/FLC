// Copyright (c) 2016 Muhammad Ariff Bin Yasri.
// Licensed under the MIT license. 

(function($) {
	$.fuzzyplotfuzzifier = function(type, arrayInput, x, placeholder,label,color,legend) {
		var d = [];
		if(type== "trapezoidal") {
			
			var y = [];
			//finding intersection from the crisp inputs
			for(var i=0;i<arrayInput.length;i++) {
				if(x < arrayInput[i][0]) {
					y[i] = 0;
				}
				else if(x >= arrayInput[i][0] && x <= arrayInput[i][1]) {
					y[i] = (x - arrayInput[i][0])/(arrayInput[i][1]-arrayInput[i][0]);
				}
				else if(x > arrayInput[i][1] && x < arrayInput[i][2]) {
					y[i] = 1;
				}
				else if(x >= arrayInput[i][2] && x <= arrayInput[i][3]) {
					y[i] = (arrayInput[i][3] - x) / (arrayInput[i][3] - arrayInput[i][2]);
				}
				else {
					y[i] = 0;
				}
				if(isNaN(y[i]))
					y[i] = 0;
				y[i] = y[i].toFixed(2);
			}
			//plot graph of triangular include the label in line graph color
			for(var i=0;i<arrayInput.length;i++) {
				d[i] =  {
					label : label[i],
					color : color[i],
					data : [[arrayInput[i][0],0],[arrayInput[i][1],1],[arrayInput[i][2],1],[arrayInput[i][3],0]]};
			}
			
			//plot the line of y axis from the intersection include the label in line graph color
			for(var i=0;i<arrayInput.length;i++) {
				d[i+arrayInput.length] =  {
					label : 'y-output',
					color : 'yellow',
					data : [[arrayInput[0][0],y[i]],[x,y[i]]]};
			}

			//plot the crisp input include the label in line graph color
			d[arrayInput.length*2] = {
				label : 'x-input',
				color : 'purple',
				data : [[x,0],[x,1.2]]};
		}
		else if(type == "triangular") {

			/*
				Step 1 : Fuzzification
			*/
			var y = [];
			//finding intersection from the crisp inputs
				for(var i=0;i<arrayInput.length;i++) {
					if(x < arrayInput[i][0]) {
						y[i] = 0;
					}
					else if((x == arrayInput[i][0]) && (x == arrayInput[i][1]))
						y[i] = 1;
					else if((x == arrayInput[i][1]) && (x == arrayInput[i][2]))
						y[i] = 1;
					else if(x >= arrayInput[i][0] && x <= arrayInput[i][1]) {
						y[i] = (x - arrayInput[i][0])/(arrayInput[i][1]-arrayInput[i][0]);
					}
					else if(x >= arrayInput[i][1] && x <= arrayInput[i][2]) {
						y[i] = (arrayInput[i][2] - x) / (arrayInput[i][2] - arrayInput[i][1]);
					}
					else {
						y[i] = 0;
					}
					if(isNaN(y[i]))
						y[i] = 0;
					y[i] = y[i].toFixed(2);
			}
			//plot graph of triangular include the label in line graph color
			for(var i=0;i<arrayInput.length;i++) {
				d[i] =  {
						label : label[i],
						color : color[i],
						data : [[arrayInput[i][0],0],[arrayInput[i][1],1],[arrayInput[i][2],0]]};
			}
			//plot the line of y axis from the intersection include the label in line graph color
			for(var i=0;i<arrayInput.length;i++) {
				d[i+arrayInput.length] =  {
						label : 'y-output',
						color : 'purple',
						data : [[arrayInput[0][0],y[i]],[x,y[i]]]};
			}
			
			//plot the crisp input include the label in line graph color
			d[arrayInput.length*2] = {
				label : 'x-input',
				color : 'yellow',
				data : [[x,0],[x,1.2]]};
			
		}
		
		//using flot to plot the graph
		$.plot(placeholder,d, {
			series: {
				lines: {
					show:true
				}
			},
			legend: {
				noColumns :20,//maximum number of display labels
				container: $(legend)
			}
		});

		return y;
	};
})(jQuery);