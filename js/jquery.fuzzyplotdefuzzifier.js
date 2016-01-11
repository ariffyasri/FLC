// Copyright (c) 2016 Muhammad Ariff Bin Yasri.
// Licensed under the MIT license. 

(function($) {
	$.fuzzyplotdefuzzifier = function(type, arrayOutput, y, placeholder,label,color,legend) {
		var d = [];
		var total = 0;
		var division = 0.0;
		var yaxis = 0.0
		if(type == "trapezoidal") {
			
			for(var i=0;i<arrayOutput.length;i++) {
				//if the rules evaluate equals to zero, then no need to plot the graph
				if(y[i]==0) { /*
					arrayOutput[i][0] = arrayOutput[0][0];
					arrayOutput[i][1] = arrayOutput[0][0];
					arrayOutput[i][2] = arrayOutput[0][0];
					arrayOutput[i][3] = arrayOutput[0][0];*/
				}
				//else if the rules evaluate have value, then proceed to plot the graph	
				else {
					var xstart = arrayOutput[i][0];
					var xend = arrayOutput[i][3];

					for (x=xstart;x<=xend;x=x+0.01) {
						if(x < arrayOutput[i][0]) {
							yaxis = 0;
						}
						else if(x == arrayOutput[i][0] && x == arrayOutput[i][1]) {
							yaxis = 1;
						}
						else if(x == arrayOutput[i][2] && x == arrayOutput[i][3]) {
							yaxis = 1;
						}
						else if(x >= arrayOutput[i][1] && x <= arrayOutput[i][2]) {
							yaxis = 1;
						}
						else if(x >= arrayOutput[i][0] && x <= arrayOutput[i][1]) {
							yaxis = (x - arrayOutput[i][0])/(arrayOutput[i][1]-arrayOutput[i][0]);
						}
						
						else if(x >= arrayOutput[i][2] && x <= arrayOutput[i][3]) {
							yaxis = (arrayOutput[i][3] - x) / (arrayOutput[i][3] - arrayOutput[i][2]);
						}
						else {
							yaxis = 0;
						}
						if(yaxis > y[i])
							yaxis = y[i];
						if(isNaN(yaxis))
							yaxis = 0;
						
						total = total + (yaxis*x);
						division =division+(yaxis*1);

						d.push([[x,0],[x,yaxis]]);

					}
				}

				//plot the graph include the label in line graph color
				d.push({
					label : label[i],
					color : color[i],
					data : [[arrayOutput[i][0],0],[arrayOutput[i][1],1],[arrayOutput[i][2],1],[arrayOutput[i][3],0]]});
			}
			//cog calculation
			total = total/division;

			d.push({
				label : "Centre of gravity",
				color : "orange",
				data : [[total,0],[total,1]]
			});
			
			
		}
		else if(type == "triangular") {

			for(var i=0;i<arrayOutput.length;i++) {
				//if the rules evaluate equals to zero, then no need to plot the graph
				if(y[i]==0) { /*
					arrayOutput[i][0] = arrayOutput[0][0];
					arrayOutput[i][1] = arrayOutput[0][0];
					arrayOutput[i][2] = arrayOutput[0][0];*/
				}
				//else if the rules evaluate have value, then proceed to plot the graph	
				else {
					var xstart = arrayOutput[i][0];
					var xend = arrayOutput[i][2];

					for (x=xstart;x<=xend;x=x+0.01) {
						if(x < arrayOutput[i][0]) {
							yaxis = 0;
						}
						else if(x >= arrayOutput[i][0] && x <= arrayOutput[i][1]) {
							yaxis = (x - arrayOutput[i][0])/(arrayOutput[i][1]-arrayOutput[i][0]);
						}
						else if(x >= arrayOutput[i][1] && x <= arrayOutput[i][2]) {
							yaxis = (arrayOutput[i][2] - x) / (arrayOutput[i][2] - arrayOutput[i][1]);
						}
						else {
							yaxis = 0;
						}
						if(yaxis > y[i])
							yaxis = y[i];
						if(isNaN(yaxis))
							yaxis = 0;
						
						total = total + (yaxis*x);
						division =division+(yaxis*1);

						d.push([[x,0],[x,yaxis]]);

					}
				}

				//plot the graph include the label in line graph color
				d.push({
					label : label[i],
					color : color[i],
					data : [[arrayOutput[i][0],0],[arrayOutput[i][1],1],[arrayOutput[i][2],0]]});
			}

			//cog calculation
			total = total/division;

			d.push({
				label : "Centre of gravity",
				color : "orange",
				data : [[total,0],[total,1.2]]
			});
			
		}
		
		//using flot to plot the graph
		$.plot(placeholder,d, {
			series: {
				lines: {
					show:true
				}
			},
			legend: {
				noColumns : 20,//maximum number of display labels
				container: $(legend)
			}
		});

		return total.toFixed(2);
	};
})(jQuery);