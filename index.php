
<html>

	<head>
		<title>Filtru de continut</title>
	</head>
	
	<body>
	
		<form action="" method="get" autocomplete="off">
		
			<select name="marca">
				<option value="all" selected>Toate marcile</option>
				<option value="Dacia">Dacia</option>
				<option value="Ford">Ford</option>
				<option value="Toyota">Toyota</option>
			</select> | 
			
			<select name="culoare">
				<option value="all" selected>Toate culorile</option>
				<option value="alb">Alb</option>
				<option value="albastru">Albstru</option>
				<option value="rosu">Rosu</option>
				<option value="gri">Gri</option>
			</select> | 
			
			<select name="an">
				<option value="all" selected>Toti anii</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
			</select> | 
			
			Pret maxim: <input name="pret_maxim" value="" /> | 
			
			<input type="submit" value="Filtrare" /> <a href="/">Resetare</a>
		
		</form>
		
		<hr />
		
		<div id="rezultate">
		
			<?php
			require_once('functions.php');
			
			echo displayFilteredData();
			?>
		
		</div>
	
	</body>

</html>