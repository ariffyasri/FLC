<!-- 

Copyright (c) 2016 Muhammad Ariff Bin Yasri.
Licensed under the MIT license. 

-->

<html>
	<head>
	<!-- -->
	<title>Fuzzy Logic Control</title>

	<!-- css -->
	<!--<link href="dist/css/style.min.css" rel="stylesheet">-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/freelancer.css" rel="stylesheet">
		
	<!-- javascript -->
	<script language="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
	<script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.fuzzyplotfuzzifier.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.fuzzyplotdefuzzifier.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.fuzzymain.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>


		<script language="javascript">
			function createinput(param) {
				var s= "";
				for(var i = 0; i < param; i++) {
					s+= '<div class="panel panel-default"><div class="panel-heading">VARIABLE '+(i+1)+'</div><div class="panel-body">';
					s+= 'Linguistic Variable : <input class="form-control" type="text" name="inputName'+i+'" id="inputName'+i+'" /><br />';
					s+= 'Graph Type : <select class="form-control" name="graphinput'+i+'"><option value="trapezoidal">Trapezoidal</option><option value="triangular">Triangular</option></select><br />';
					s+= 'How many values :<input class="form-control" type="text" name="numberValues'+i+'" id="numberValues'+i+'"/><br />';
					s+= '<input class="btn btn-success btn-lg" style="width:100%" type="button" onclick="createvalue(numberValues'+i+'.value,indexVal'+i+'.value)" value="Create Linguistic Variable"/>';
					s+= '<input class="form-control" type="hidden" id="indexVal'+i+'" value="'+i+'"/><br /><div id="contentValue'+i+'"></div><br />';
					s+= '</div></div>'; 

				}
				document.getElementById("contentInput").innerHTML=s;
			}

			function createoutput(param) {
				var s= "";
				for(var i = 0; i < param; i++) {
					s+= '<div class="panel panel-default"><div class="panel-heading">VARIABLE '+(i+1)+'</div><div class="panel-body">';
					s+= 'Linguistic Variable : <input class="form-control" type="text" id="outputName'+i+'" name="outputName'+i+'"/><br />';
					s+= 'Graph Type : <select class="form-control" name="graphoutput'+i+'"><option value="trapezoidal">Trapezoidal</option><option value="triangular">Triangular</option></select><br />';
					s+= 'How many values :<input class="form-control" type="text" name="numberOutput'+i+'" id="numberOutput'+i+'"/><br />';
					s+= '<input class="btn btn-success btn-lg" style="width:100%" type="button" onclick="createvalueOutput(numberOutput'+i+'.value,indexOut'+i+'.value)" value="Create Linguistic Variable"/>';
					s+= '<input class="form-control" type="hidden" id="indexOut'+i+'" value="'+i+'"/><br /><div id="contentOutput'+i+'"></div><br />'; 
					s+= '</div></div>'; 

				}
				document.getElementById("contentOutput").innerHTML=s;
			}

			function createvalueOutput(param1,param2) {
				var s ="";
				for(var i=0; i<param1;i++) {
					s += 'Linguistic Value : <input class="form-control" type="text" name="output'+param2+'value'+i+'" id="output'+param2+'value'+i+' "/> Graph Value : <input class="form-control" type="text" name="output'+param2+'graphvalue'+i+'" id="output'+param2+'graphvalue'+i+'"><br />';
				}
				var h = "contentOutput"+param2;
				document.getElementById(h).innerHTML=s;
			}

			function createvalue(param1,param2) {
				var s ="";
				for(var i=0; i<param1;i++) {
					s += 'Linguistic Value : <input class="form-control" type="text" name="input'+param2+'value'+i+'" id="input'+param2+'value'+i+'"/> Graph Value : <input class="form-control" type="text" name="input'+param2+'graphvalue'+i+'" id="input'+param2+'graphvalue'+i+'"><br />';
				}
				var h = "contentValue"+param2;
				document.getElementById(h).innerHTML=s;
			}

		</script>
	</head>

	<body id="page-top" class="index">
		<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#top">Fuzzy Logic Control</a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="hidden">
	                        <a href=""></a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#contact">Contact</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container-fluid -->
	    </nav>

	    <!-- Header -->
	    <header id="top">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12">
	                        <h1>Fuzzy Logic Control</h1>
	                        <br /><blockquote>Fuzzy logic is widely used in machine control. The term "fuzzy" refers to the fact that the logic involved can deal with concepts that cannot be expressed as the "true" or "false" but rather as "partially true".<footer>From Wikipedia</footer></blockquote><br /><br />
	                        <div class="page-scroll">
	                        	<a href="#startfuzzy" class="btn btn-danger btn-lg">START FUZZINESS</a>
	                    	</div>
	                    
	                </div>
	            </div>
	        </div>
	    </header>

	    <section id="startfuzzy" class="warning">
	        <div class="container-fluid">

	        	<div class="row">
	        		<div class="form-group">
	        		<form method="POST" action="index.php#contentAllData">
	        		<div class="panel panel-default col-md-offset-2" style="width:60%"><div class="panel-heading">INPUT OUTPUT DATA</div><div class="panel-body">
	        		<!-- input -->
	        		<h1 class="col-md-offset-5" id="contentInputHeader">INPUT</h1>
	        		<div class="row">
							<label for="numberInput" class="col-md-2 col-md-offset-2">How many input :</label>
							<input class="form-control col-md-4 " type="text" style="width:50%" id="numberInput"/>
					</div>
					<br />
					<div class="row">
							<div class="page-scroll">
								<a href="#contentInputHeader"><input class="btn btn-primary btn-lg col-md-2 col-md-offset-2" type="button" style="width:67%" onclick="createinput(numberInput.value)" value="Add Input!"/></a>
							</div>
					</div>
					<br /><br />
					<div id="contentInput" class="col-md-offset-2" style="width:60%">
					
					</div>

					<!-- output -->
					<h1 class="col-md-offset-5" id="contentOutputHeader">OUTPUT</h1>
					<div class="row">
							<label for="numberOutput" class="col-md-2 col-md-offset-2">How many output :</label>
							<input class="form-control col-md-4" type="text" style="width:50%" id="numberOutput"/><br />
					</div>
					<br />
					<div class="row">
						<div class="page-scroll">
							<a href="#contentOutputHeader"><input class="btn btn-primary btn-lg col-md-2 col-md-offset-2" type="button" style="width:67%" onclick="createoutput(numberOutput.value)" value="Add Output!"/></a>
						</div>
					</div>
					<br /><br />
					<div id="contentOutput" class="col-md-offset-2" style="width:60%">

					</div>

					<!-- rule -->
					<div class="row">
							<label for="numberRule" class="col-md-2 col-md-offset-2">How many rules :</label> 
							<input class="form-control col-md-4" type="text" style="width:50%" id="numberRule" name="numberRule" />
					</div>
					<br />
					<div class="row">
						<div class="page-scroll">
							<input class="btn btn-danger btn-lg col-md-offset-2" type="submit" value="Make Rule!" style="width:67%" name="value"/>
						</div>
					</div>

					</div></div>
					</form>
					

					

					<br /><br />
					<div id="displaydatarule" class="col-md-offset-2" style="width:60%">
					<form method="POST" action="index.php#rulegraph">	
						<?php
							$inputName = array();
							$outputName = array();
							$numberInput = array();
							$numberOutput = array();
							$elseKey = array();
							$elseValue = array();
							$graphInput = array();
							$graphOutput = array();
							$numberRule = 0;
							$inputValue = array(array());
							$outputValue = array(array());
							$inputGraphValue = array(array());
							$outputGraphValue = array(array());
							if(isset($_POST['value'])) {
								foreach($_POST as $key => $value) {
									if(preg_match('/inputName/',$key)) {
										$inputName[] = $value;
									}
									else if(preg_match('/outputName/',$key)) {
										$outputName[] = $value;
									}
									else if(preg_match('/numberValues/',$key)){
										$numberInput[] = $value;
									}
									else if(preg_match('/numberOutput/', $key)) {
										$numberOutput[] = $value;
									}
									else if(preg_match('/numberRule/', $key)) {
										$numberRule = $value;
									}
									else if(preg_match('/graphinput/', $key)) {
										$graphInput[] = $value;
									}
									else if(preg_match('/graphoutput/', $key)) {
										$graphOutput[] = $value;
									}
									else {
										$elseKey[] = $key;
										$elseValue[] = $value;
									}
								}

								for($i = 0; $i < sizeof($numberInput); $i++) {
									$input = $numberInput[$i];
									for($a = 0; $a < sizeof($elseKey); $a++) {
										if(preg_match('/input'. $i .'value/', $elseKey[$a])) {
											$inputValue[$i][] = $elseValue[$a];
										}
										else if(preg_match('/output'. $i .'value/', $elseKey[$a])) {
											$outputValue[$i][] = $elseValue[$a];
										}
										else if(preg_match('/input'. $i .'graphvalue/', $elseKey[$a])) {
											$inputGraphValue[$i][] = $elseValue[$a];
										}
										else if(preg_match('/output'. $i .'graphvalue/', $elseKey[$a])) {
											$outputGraphValue[$i][] = $elseValue[$a];
										}
									}
								}

								echo '<div id="contentAllData"></div><br /><br /><div class="panel panel-default"><div class="panel-heading">DISPLAY ALL INPUT OUTPUT DATA</div><div class="panel-body">';
								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "<br />Input : <input class='form-control' type='text' value='".$inputName[$i]."' name='inputName[".$i."]' readonly><br />Graph type : <input class='form-control' type='text' value='".$graphInput[$i]."' name='graphInput[".$i."]' readonly><br />";
									for($j = 0; $j < sizeof($inputValue[$i]); $j++) {
										echo "Input value : <input class='form-control' type='text' value='".$inputValue[$i][$j]."' name='inputValue[".$i."][".$j."]' readonly><br />Value of graph : <input class='form-control' type='text' value='".$inputGraphValue[$i][$j]."' name='inputGraphValue[".$i."][".$j."]' readonly>";
									}
								}
								for($i = 0; $i < sizeof($outputName); $i++) {
									echo "<br />Output : <input class='form-control' type='text' value='".$outputName[$i]."' name='outputName[".$i."]' readonly><br />Graph type : <input class='form-control' type='text' value='".$graphOutput[$i]."' name='graphOutput[".$i."]' readonly><br />";
									for($j = 0; $j < sizeof($outputValue[$i]); $j++) {
										echo "Output value : <input class='form-control' type='text' value='".$outputValue[$i][$j]."' name='outputValue[".$i."][".$j."]' readonly><br />Value of graph : <input class='form-control' type='text' value='".$outputGraphValue[$i][$j]."' name='outputGraphValue[".$i."][".$j."]' readonly>";
									}
								}
								echo "</div></div>";

								
								echo '<div class="panel panel-default"><div class="panel-heading">RULES</div><div class="panel-body">';
								for($h = 0; $h < $numberRule; $h++) {
									echo '<br />'.($h+1).')	If ';
									for($i = 0; $i < sizeof($inputName); $i++) {
										echo $inputName[$i].' is <select name="ruleinput['.$h.']['.$i.']">';
										for($j = 0; $j < sizeof($inputValue[$i]); $j++) {
											echo '<option value="'.$j.'">'.$inputValue[$i][$j].'</option>';
										}
										// echo '<option value="none">none</option></select>';
										echo '</select>';	
										if($i < (sizeof($inputName)-1)){
											echo ' <select  name="ruleconnin['.$h.']['.$i.']">
												<option value="1">and</option>
												<option value="0">or</option>
												</select> ';
										}	
									}							
									echo ' then ';
									for($i = 0; $i < sizeof($outputName); $i++) {
										echo $outputName[$i].' is <select  name="ruleoutput['.$h.']['.$i.']">';
										for($j = 0; $j < sizeof($outputValue[$i]); $j++) {
											echo '<option value="'.$j.'">'.$outputValue[$i][$j].'</option>';
										}
										// echo '<option value="none">none</option>';
										echo '</select>';
										if($i < (sizeof($outputName)-1)){
											echo ' <select name="ruleconnout['.$h.']['.$i.']">
												<option value="and">and</option>
												<option value="or">or</option>
												</select> ';
										}	
									}
								}
								echo "</div></div><br /><br />";
								for($i = 0; $i < sizeof($inputName); $i++) {
									echo $inputName[$i]." : <input class='form-control' type='text' name='inputTest[".$i."]' /><br /><br /><input class='btn btn-danger btn-lg ' style='width:100%' type='submit' value='Make Graph!' name='graph'/>";
								}
							}
							if(isset($_POST['graph'])) {

								$ruleconnin =  0;
								$ruleconnout = 0;
								foreach($_POST as $key => $value) {
									if(preg_match('/ruleconnin/', $key)) {
										$ruleconnin = $value; //connector AND OR for input
									}
									else if(preg_match('/ruleconnout/', $key)) {
										$ruleconnout = $value; //connector AND OR for output
									}
									else if(preg_match('/ruleinput/',$key)) {
										$ruleinput = $value; //value of each linguistic variable for each row input
									}
									else if(preg_match('/ruleoutput/',$key)) {
										$ruleoutput = $value; //value of each linguistic variable for each row output
									}
									else if(preg_match('/inputName/',$key)) {
										$inputName = $value; //linguistic variable for input
									}
									else if(preg_match('/inputValue/',$key)) {
										$inputValue = $value; // linguistic value fot input
									}
									else if(preg_match('/outputName/',$key)) {
										$outputName = $value; // linguistic variable for output
									}
									else if(preg_match('/outputValue/',$key)) {
										$outputValue = $value; // linguistic value for output
									}
									else if(preg_match('/inputTest/',$key)) {
										$inputTest = $value; //the value input that will be fuzzify
									}
									else if(preg_match('/graphInput/', $key)) {
										$graphInput = $value;
									}
									else if(preg_match('/graphOutput/', $key)) {
										$graphOutput = $value;
									}
									elseif(preg_match('/inputGraphValue/', $key)) {
										$inputgraphvalue = $value;
									}
									elseif(preg_match('/outputGraphValue/', $key)) {
										$outputgraphvalue = $value;
									}
								}
								echo '<div id = "rulegraph"></div><br /><br />';
								echo '<div class="panel panel-default"><div class="panel-heading">GRAPH</div><div class="panel-body">
								<h1>INPUT</h1>';
								for($i = 0; $i < sizeof($inputName); $i++) {
									echo '	<h6>'.$inputName[$i].'</h6>
											<div id="placeholderinput'.$i.'" style="width:600px;height:300px"></div>
											<div id="chartlegendinput'.$i.'"></div>
											<div id="displayinput'.$i.'"></div>';	
								}

								echo '<br /><h1>OUTPUT</h1>';
								for($i = 0; $i < sizeof($outputName); $i++) {
									echo '	<h6>'.$outputName[$i].'</h6>
											<div id="placeholderoutput'.$i.'" style="width:600px;height:300px"></div>
											<div id="chartlegendoutput'.$i.'"></div>
											<div id="displayoutput'.$i.'"></div>';	
								}
								echo "<script>";

								//variable for input in js
								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "var yInput".$i." = [];";
								}

								//variable for output in js
								for($i = 0; $i < sizeof($outputName); $i++) {
									echo "var yOutput".$i." = [];";
								}

								//variable for label each input, this label is for the graph
								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "var labelinput".$i." = ".json_encode($inputValue[$i]).";";
								}

								//variable for label each output, this label is for the graph
								for($i = 0; $i < sizeof($outputName); $i++) {
									echo "var labeloutput".$i." = ".json_encode($outputValue[$i]).";";
								}

								//color for line graph
								echo "var color = ['red','blue','green','orange','yellow','purple','grey'];";
								
								//input that will be fuzzify
								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "var input".$i." = ".$inputTest[$i].";";
								}

								//input graph type
								for($i = 0; $i < sizeof($graphInput); $i++) {
									echo "var graphInput".$i." = '".$graphInput[$i]."';";
								}

								//output graph type
								for($i = 0; $i < sizeof($graphOutput); $i++) {
									echo "var graphOutput".$i." = '".$graphOutput[$i]."';";
								}

								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "var xvalueInput".$i." = [];";
									for($j = 0; $j < sizeof($inputValue[$i]); $j++) {
										echo "xvalueInput".$i." .push([".$inputgraphvalue[$i][$j]."]);";
									}
								}

								for($i = 0; $i < sizeof($outputName); $i++) {
									echo "var xvalueOutput".$i." = [];";
									for($j = 0; $j < sizeof($outputValue[$i]); $j++) {
										echo "xvalueOutput".$i." .push([".$outputgraphvalue[$i][$j]."]);";
									}
								}

								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "var placeholderinput".$i." = '#placeholderinput".$i."';";
								}

								for($i = 0; $i < sizeof($outputName); $i++) {
									echo "var placeholderoutput".$i." = '#placeholderoutput".$i."';";
								}


								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "var chartlegendinput".$i." = '#chartlegendinput".$i."';";
								}

								for($i = 0; $i < sizeof($outputName); $i++) {
									echo "var chartlegendoutput".$i." = '#chartlegendoutput".$i."';";
								}

								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "yInput".$i." = $.fuzzyplotfuzzifier(graphInput".$i.", xvalueInput".$i.", input".$i.", placeholderinput".$i.", labelinput".$i.", color, chartlegendinput".$i.");";
									 //echo "alert(yInput".$i.");";
								}
								
								//this loop to initialize all the linguistic variable with fuzzify value
								for($i = 0; $i < sizeof($ruleinput); $i++) {
									echo "var ruleEvaluationValue".$i." = [];";
									echo "var storelastValueEvaluate = []; ";
									for($j = 0; $j < sizeof($ruleinput[$i]); $j++) {
										echo "ruleEvaluationValue".$i."[".$j."] = yInput".$j."[".$ruleinput[$i][$j]."];";
										//echo "alert('Rule ".$i." '+ruleEvaluationValue".$i."[".$j."]);";
									}
								}

								for($i = 0; $i < sizeof($ruleinput); $i++) {
									for($j = 0; $j < sizeof($ruleinput[$j])-1; $j++) {
										if($ruleconnin[$i][$j] == 1) {
											echo "ruleEvaluationValue".$i."[".$j."] = Math.min(ruleEvaluationValue".$i."[".$j."],ruleEvaluationValue".$i."[".($j+1)."]);";
											echo "ruleEvaluationValue".$i."[".($j+1)."] = ruleEvaluationValue".$i."[".$j."];";
											echo "storelastValueEvaluate[".$i."] = ruleEvaluationValue".$i."[".$j."];";
										}
									}
								}


								for($i = 0; $i < sizeof($ruleinput); $i++) {
									for($j = 0; $j < sizeof($ruleinput[$j])-1; $j++) {
										if($ruleconnin[$i][$j] == 0) {
											echo "ruleEvaluationValue".$i."[".$j."] = Math.max(ruleEvaluationValue".$i."[".$j."],ruleEvaluationValue".$i."[".($j+1)."]);";
											echo "ruleEvaluationValue".$i."[".($j+1)."] = ruleEvaluationValue".$i."[".$j."];";
											echo "storelastValueEvaluate[".$i."] = ruleEvaluationValue".$i."[".$j."];";
										}
									}
								}
								
								for($i = 0; $i < sizeof($inputName); $i++) {
									echo "displayin".$i." = document.getElementById('displayinput".$i."');
										newdiv = document.createElement('div');
										newdiv.setAttribute('id','in".$i."');
										newdiv.innerHTML = '<br />Input : '+input".$i.";
										for(var x=0;x<yInput".$i.".length;x++) {
											newdiv.innerHTML += '<br />'+labelinput".$i."[x]+' : '+yInput".$i."[x];
										}
										displayin".$i.".appendChild(newdiv);";	
								}
								

								for($h = 0; $h < sizeof($outputName); $h++) {
									echo "var out = new Array(".sizeof($outputValue[$h])."+1).join('0').split('').map(parseFloat);";
									echo " if(out[".$ruleoutput[0][$h]."] < storelastValueEvaluate[0]) {";
									echo " out[".$ruleoutput[0][$h]."] = storelastValueEvaluate[0];}";
									for($i = 1; $i < sizeof($ruleoutput); $i++) {
										echo " if(out[".$ruleoutput[$i][$h]."] < storelastValueEvaluate[".$i."]) {";
										echo " out[".$ruleoutput[$i][$h]."] = storelastValueEvaluate[".$i."];}";
									}

									echo "cog".$h." = $.fuzzyplotdefuzzifier(graphOutput".$h.", xvalueOutput".$h.", out, placeholderoutput".$h.", labeloutput".$h.", color, chartlegendoutput".$h.");";
									echo "if(isNaN(cog".$h."))cog".$h." = 0;alert(cog".$h.");";
								}

								for($i = 0; $i < sizeof($outputName); $i++) {
									echo "displayout".$i." = document.getElementById('displayoutput".$i."');
										newdiv = document.createElement('div');
										newdiv.setAttribute('id','in".$i."');
										newdiv.innerHTML = '<br />Cog : '+cog".$i.";
										for(var x=0;x<yOutput".$i.".length;x++) {
											newdiv.innerHTML += '<br />'+labeloutput".$i."[x]+' : ';
										}
										displayout".$i.".appendChild(newdiv);";	
								}
								

								echo "</script>";
								echo "</div></div><br /><br />";						
							}	
						?>
						
					</form>
					</div>
				</div>
	            </div>
	        </div>
	    </section>
	    <!-- Footer -->
    <footer class="text-center" id="contact">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Author</h3>
                        <p>Muhammad Ariff Bin Yasri<br>Student</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact Us!</h3>
                        <p><a href="mailto:ariffacm@gmail.com">ariffacm[at]gmail[dot]com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; aiscool 2016
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>