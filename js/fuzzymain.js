var yInput0 = []; //sunlight
var yInput1 = []; //soil humidity
var yInput2 = []; //air humidity
var youtput0 = []; //amount of water
var youtput1 = []; //rate of water
var output = [];
var labelwindspeed = ['slow','average','fast'];
var labelhumidity = ['average','slightly humid','humid'];
var labeltemperature = ['low','medium','high'];
var color = ['red','blue','green'];

var labelamountofwater = ['low','medium','high'];

function windspeed() {
	var input = document.getElementById("input").value;
	var type = document.getElementById("type").value;
	var placeholder = "";
	
	var arrayInput = [];

	arrayInput = [[1,1,4,5],[3,5,7,9],[6,9,9,9]];
	
	placeholder = "#placeholderinput0";
	legend = "#chartLegendwind";
	output = $.fuzzyflot(type, arrayInput, input,placeholder,labelwindspeed,color,legend);
	yInput2 = output;
	alert(output.length);
	output.sort();
	for(var a=0;a < output.length; a++) {
		alert(output[a]);
	}
	
	
}
function humidity() {
	var input = document.getElementById("input1").value;
	var type = document.getElementById("type1").value;
	var placeholder = "";
	
	var arrayInput = [];

	arrayInput = [[70,70,75],[73,80,85],[80, 90, 90]];
	
	placeholder = "#placeholderinput1";
	legend = "#chartLegendhumidity";
	output = $.fuzzyflot(type, arrayInput, input,placeholder,labelhumidity,color,legend);
	yInput1 = output;
	alert(output.length);
	//output.sort();
	for(var a=0;a < output.length; a++) {
		alert(output[a]);
	}
}
function temperature() {
	var input = document.getElementById("input2").value;
	var type = document.getElementById("type2").value;
	var placeholder = "";
	
	var arrayInput = [];

	arrayInput = [[20,20,27],[25,30,35],[33, 40, 40]];
	
	placeholder = "#placeholderinput2";
	legend = "#chartLegendtemperature";
	output = $.fuzzyflot(type, arrayInput, input,placeholder,labeltemperature,color,legend);
	yInput0 = output;
	alert(output.length);
	//output.sort();
	for(var a=0;a < output.length; a++) {
		alert(output[a]);
	}
}

function myOutput() {
	//var type = document.getElementById("typeoutput").value;
	var type = "triangular";

	var arrayOutput = [[0, 0, 0.6],[0.4,1.0,1.6],[1.5,2.2,2.2]];
	youtput0 = [[0],[0],[0]];
	youtput = [[0],[0],[0]];
	
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

	youtput[0][0] = Math.max(youtput0[0][0],youtput0[0][1],youtput0[0][2],youtput0[0][3],youtput0[0][4],youtput0[0][5],youtput0[0][6]);

	alert(youtput[0][0]*1);
	//var youtput0 = youtput[0][].sort();
	
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

	youtput[1][0] = Math.max(youtput0[1][0],youtput0[1][1],youtput0[1][2],youtput0[1][3],youtput0[1][4],youtput0[1][5],youtput0[1][6],youtput0[1][7],youtput0[1][8],youtput0[1][9],youtput0[1][10],youtput0[1][11],youtput0[1][12],youtput0[1][13],youtput0[1][14]); 
	alert(youtput[1][0]*1);
	//output amount of water is high
	youtput0[2][0] = Math.min(yInput0[1],yInput1[0],yInput2[1]);
	youtput0[2][1] = Math.min(yInput0[1],yInput1[0],yInput2[2]);
	youtput0[2][2] = Math.min(yInput0[2],yInput1[0],yInput2[0]);
	youtput0[2][3] = Math.min(yInput0[2],yInput1[0],yInput2[1]);
	youtput0[2][4] = Math.min(yInput0[2],yInput1[0],yInput2[2]);

	youtput[2][0] = Math.max(youtput0[2][0],youtput0[2][1],youtput0[2][2],youtput0[2][3],youtput0[2][4]);
	alert(youtput[2][0]*1);
	placeholder = "#placeholderoutput0";
	legend = "#chartLegendwater";
	var cog = $.fuzzyflotoutput(type, arrayOutput, youtput,placeholder,labelamountofwater,color,legend);
	alert("Center of gravity : "+cog);
	
}