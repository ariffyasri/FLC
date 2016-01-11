// Copyright (c) 2016 Muhammad Ariff Bin Yasri.
// Licensed under the MIT license. 

(function($) {
	$.fuzzymain = function(windspeed, humidity, temperature) {
		var yInput0 = []; //sunlight
		var yInput1 = []; //soil humidity
		var yInput2 = []; //air humidity
		var youtput0 = []; //amount of water
		
		var labelwindspeed = ['slow','average','fast'];
		var labelhumidity = ['average','slightly humid','humid'];
		var labeltemperature = ['low','medium','high'];
		var color = ['red','blue','green'];
		var labelamountofwater = ['low','medium','high'];


		/* start wind speed section */
		var input = windspeed;
		var type = "triangular";
		var placeholder = "";

		var arrayInput = [];

		arrayInput = [[1,1,4],[3,5,7],[6,9,9]];

		placeholder = "#placeholderinput0";
		legend = "#chartLegendwind";
		output = $.fuzzyplotfuzzifier(type, arrayInput, input,placeholder,labelwindspeed,color,legend);
		yInput2 = output;
		alert(yInput2);
		
		var display = document.getElementById('displaywind');
		var newdiv = document.createElement('div');
		newdiv.setAttribute('id','windvalue');
		newdiv.innerHTML = '<br />Input : '+input;
		for(var x=0;x<yInput2.length;x++) {
			newdiv.innerHTML += '<br />'+labelwindspeed[x]+' : '+yInput2[x];
		}
		display.appendChild(newdiv);

		/*end wind speed section*/

		/*start humidity section*/
		input = humidity;
		placeholder = "";

		arrayInput = [];

		arrayInput = [[70,70,75],[73,80,85],[83, 90, 90]];

		placeholder = "#placeholderinput1";
		legend = "#chartLegendhumidity";
		output = $.fuzzyplotfuzzifier(type, arrayInput, input,placeholder,labelhumidity,color,legend);
		yInput1 = output;

		display = document.getElementById('displayhumidity');
		newdiv = document.createElement('div');
		newdiv.setAttribute('id','haha1');
		newdiv.innerHTML = '<br />Input : '+input;
		for(var x=0;x<yInput1.length;x++) {
			newdiv.innerHTML += '<br />'+labelhumidity[x]+' : '+yInput1[x];
		}
		display.appendChild(newdiv);

		/*end humidity section*/

		//start temperature section
		input = temperature;
		placeholder = "";

		arrayInput = [];

		arrayInput = [[20,20,27],[25,30,35],[33, 40, 40]];

		placeholder = "#placeholderinput2";
		legend = "#chartLegendtemperature";
		output = $.fuzzyplotfuzzifier(type, arrayInput, input,placeholder,labeltemperature,color,legend);
		yInput0 = output;
		

		display = document.getElementById('displaytemperature');
		newdiv = document.createElement('div');
		newdiv.setAttribute('id','haha2');
		newdiv.innerHTML = '<br />Input : '+input;
		for(var x=0;x<yInput0.length;x++) {
			newdiv.innerHTML += '<br />'+labeltemperature[x]+' : '+yInput0[x];
		}
		display.appendChild(newdiv);

		//end temperature section


		//start output amount
		

		var arrayOutput = [[0, 0, 2.5],[1.5,3.0,4.5],[3.5,5.0,5.0]];
		youtput0 = [[0],[0],[0]];
		youtput = [0,0,0];

		/*
		yInput0 = temperature
		yInput0[0] = low
		yInput0[1] = medium
		yInput0[2] = high

		yInput1 = humidity
		yInput1[0] = average
		yInput1[1] = slightly
		yInput1[2] = high

		yInput2 = windspeed
		yInput2[0] = slow
		yInput2[1] = average
		yInput2[2] = fast

		output amount of water is low
		*/
		youtput0[0][0] = Math.min(yInput0[0],yInput1[1],yInput2[0]);
		youtput0[0][1] = Math.min(yInput0[0],yInput1[2],yInput2[0]);
		youtput0[0][2] = Math.min(yInput0[0],yInput1[2],yInput2[1]);
		youtput0[0][3] = Math.min(yInput0[0],yInput1[2],yInput2[2]);
		youtput0[0][4] = Math.min(yInput0[1],yInput1[1],yInput2[0]);
		youtput0[0][5] = Math.min(yInput0[1],yInput1[2],yInput2[0]);
		youtput0[0][6] = Math.min(yInput0[1],yInput1[2],yInput2[1]);

		youtput[0] = Math.max(youtput0[0][0],youtput0[0][1],youtput0[0][2],youtput0[0][3],youtput0[0][4],youtput0[0][5],youtput0[0][6]);
		alert(youtput[0]);

		//output amount of water is medium
		youtput0[1][0] = Math.min(yInput0[0],yInput1[0],yInput2[0]);
		youtput0[1][1] = Math.min(yInput0[0],yInput1[0],yInput2[1]);
		youtput0[1][2] = Math.min(yInput0[0],yInput1[0],yInput2[2]);
		youtput0[1][3] = Math.min(yInput0[0],yInput1[1],yInput2[1]);
		youtput0[1][4] = Math.min(yInput0[0],yInput1[1],yInput2[2]);
		youtput0[1][5] = Math.min(yInput0[1],yInput1[0],yInput2[0]);
		youtput0[1][6] = Math.min(yInput0[1],yInput1[1],yInput2[1]);
		youtput0[1][7] = Math.min(yInput0[1],yInput1[1],yInput2[2]);
		youtput0[1][8] = Math.min(yInput0[1],yInput1[2],yInput2[2]);
		youtput0[1][9] = Math.min(yInput0[2],yInput1[1],yInput2[0]);
		youtput0[1][10] = Math.min(yInput0[2],yInput1[1],yInput2[1]);
		youtput0[1][11] = Math.min(yInput0[2],yInput1[1],yInput2[2]);
		youtput0[1][12] = Math.min(yInput0[2],yInput1[2],yInput2[0]);
		youtput0[1][13] = Math.min(yInput0[2],yInput1[2],yInput2[1]);
		youtput0[1][14] = Math.min(yInput0[2],yInput1[2],yInput2[2]);

		youtput[1] = Math.max(youtput0[1][0],youtput0[1][1],youtput0[1][2],youtput0[1][3],youtput0[1][4],youtput0[1][5],youtput0[1][6],youtput0[1][7],youtput0[1][8],youtput0[1][9],youtput0[1][10],youtput0[1][11],youtput0[1][12],youtput0[1][13],youtput0[1][14]); 
		alert(youtput[1]);
		//output amount of water is high
		youtput0[2][0] = Math.min(yInput0[1],yInput1[0],yInput2[1]);
		youtput0[2][1] = Math.min(yInput0[1],yInput1[0],yInput2[2]);
		youtput0[2][2] = Math.min(yInput0[2],yInput1[0],yInput2[0]);
		youtput0[2][3] = Math.min(yInput0[2],yInput1[0],yInput2[1]);
		youtput0[2][4] = Math.min(yInput0[2],yInput1[0],yInput2[2]);

		youtput[2] = Math.max(youtput0[2][0],youtput0[2][1],youtput0[2][2],youtput0[2][3],youtput0[2][4]);
		alert(youtput[2]);
		placeholder = "#placeholderoutput0";
		legend = "#chartLegendwater";
		var cog = $.fuzzyplotdefuzzifier(type, arrayOutput, youtput,placeholder,labelamountofwater,color,legend);

		//end output amount
		if(isNaN(cog))
			cog = 0;


		display = document.getElementById('displaywater');
		newdiv = document.createElement('div');
		newdiv.setAttribute('id','haha3');
		newdiv.innerHTML = '<br />Center of gravity : '+cog;
		for(var x=0;x<youtput.length;x++) {
			newdiv.innerHTML += '<br />'+labelamountofwater[x]+' : '+youtput[x];
		}
		display.appendChild(newdiv);

		return cog;
	};
})(jQuery);