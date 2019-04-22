<html>
	<head>
		<title>Filtru de continut</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <div class="card" style="width: 18rem; height: 10rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <?php
                    require_once('functions.php');
                    require_once('db_connection.php');
                    ?>
                    <h5 class="card-title"><?php echo filterArrayData(); ?></h5>
                    <p class="card-text">Culoare</p>
                    <p class="card-text">An</p>
                    <p class="card-text">Pret</p>
                </div>
            </div>
		</div>
	</body>
</html>

