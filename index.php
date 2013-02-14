


<!DOCTYPE html>
<html>
	<head>
	<title>DiFractal</title>
	<link rel=stylesheet href = "http://difractal.com/main.css" type="text/css" >
	</head>
	
	<body>
		<div class = "pageContainer">
			<div class = "menuContainer">
			   <div class = "menuGreeting">
					<div class = 'logo'></div>   
					<div style = 'margin-left:200px;height:50px;'>Welcome </div>
				</div>
			</div>
			<div class = "bodyContainer">
			    <div id = 'menubarContainer'>
				  <div id = "menubar">
					<ul class = "menu">
							<li><strong>Projects</strong>
		<ul>
			<li><a href = "http://difractal.com/galleryview/galleryviewV2">Gallery Viewer</a></li>
			<li><a href = "http://difractal.com/musicplayer">Music Player</a></li>
			<li><a href = "http://difractal.com/tryit">Try-It Editor</a></li>
			<li><a href = "http://difractal.com/fractals">Fractals</a></li>
		</ul>
	</li>
	<li><strong>Development</strong>
		<ul>
			<li style = 'height:40px;'><a href = "http://difractal.com/snake">Game Engine: Snake</a></li>
			<li style = 'height:40px;'><a href = "http://difractal.com/alien">Game Engine: Alien</a></li>
			<li><a href = "http://difractal.com/table">Sortable Table</a></li>
			<li><a href = "http://difractal.com/console">Console</a></li>
		</ul>
	</li>
	<li><strong>Misc</strong>
		<ul>
			<li><a href = "http://difractal.com/polycol">Click Detect</a></li>
			<li><a href = "http://difractal.com/draw">Draw App</a></li>
			<li><a href = "http://difractal.com/numslide">Slide Scale</a></li>
		</ul>
	</li>
			<li><strong><a href = "http://difractal.com/register">Register</a></strong>
		</li>
		<li><strong><a href = "http://difractal.com/login">Log in</a></strong>
		</li>   
	 					</ul>
				</div>
			</div>
				
<div>
	<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="cantordust.js"></script>
		<script type="text/javascript" src="fern.js"></script>
		<script type="text/javascript" src="gosper.js"></script>
		<script type="text/javascript" src="hilbert.js"></script>
		<script type="text/javascript" src="koch.js"></script>
		<script type="text/javascript" src="peano.js"></script>
		<script type="text/javascript" src="sierpinski.js"></script>
		<script type="text/javascript" src="snowflake2.js"></script>
		<script type="text/javascript" src="tree.js"></script>
		<script type="text/javascript" src="fractal.js"></script>
		<script type="text/javascript" src="main.js"></script>
			<style type = 'text/css'>
				.outputContainer{
					color:white;
					font-family: arial;
					position:relative;
					top:200px;
					width:330px;
					margin: 0 auto;
				}
				
				#title {
					width:200px;
					height: 40px;
					font-size:20px;
					font-weight: bold;
					line-height:40px;
					margin:0 auto;
					background-color: #CCC;
					color: #010001;
					text-align:center;
					position:relative;
					top: -100px;
					margin-left:63px;
					display: inline-block;
				
				}	
				</style>
	</head>
	<body>
	  <div class = 'outputContainer'>
		<div id = 'title'> Fractals </div>
		<div style="text-align:center;margin-bottom:20px;">
		<canvas id="myCanvas" width="800" height="600" style="border:1px solid #c3c3c3;background-color:white;margin-left:-200px;">Your browser does not support the HTML5 canvas tag.</canvas>
		
		</div>
		<div class = "selectContainer" style = "width:270px; margin:0 auto;">
			<select id = "fractalSelect">
				<option value = "koch" selected>Snowflake </option>
				<option value = "sierpinski">Sierpinski's Triangle</option>
				<option value = "peano">Peano </option>
				<option value = "tree">Binary Tree </option>
				<option value = "cantordust">Cantor Dust </option>
				<option value = "snowflake2">Snowflake 2 </option>
				<option value = "hilbert">Hilbert </option>
				<option value ="gosper">Gosper</option>
				<option value = "fern">Fern</option>
			</select>
			<div style = 'float:right;width:100px;'>Animate?
				<input type = 'checkbox' id = "animate"></input>
			</div>
		</div>
		<div class = "fractalInputs" style = "width: 420px;min-width:420px; margin: 0 auto;">
			<div id = "controlsRow1" style = "float:left;min-width:430px;width:430px;height:23px;">
				Iterations:<input id = "iterations" type = "text" />
				Sides:<input id = "sides" type = "text" />
			</div>
			<div style = "float:left;width:450px;min-width:450px;height:23px;" id = "controlsRow2">
				Degrees:<input id = "degrees" type = "text" />
				Length:<input id = "length" type = "text" />
			</div>
			<div class = "buttonContainer" style = "width:60px; margin:0 auto;">
				<button id = "doFractal">Output Fractal </button>
			</div>
		</div>
	</div>
	</body>
</html>	
</div>

</div></div></body></html>