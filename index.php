<?php
require_once('functions.php');
?>
<html>
<head>
    <title>Car Listing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container"
     style="height: auto; margin-top: 20px; margin-bottom: 20px; margin-left: fill; margin-right: fill;">
    <form action="" method="get" autocomplete="off" style="justify-content: center">
        <div class="row" style="flex: content-box; justify-content: center">
            <div class="col-sm">
                <select name="marca" class="btn btn-primary dropdown-toggle">
                    <option value="All" selected>All Models</option>
                    <option value="Dacia">Dacia</option>
                    <option value="Ford">Ford</option>
                    <option value="Toyota">Toyota</option>
                </select>
            </div>
            <div class="col-sm">
                <select name="culoare" class="btn btn-primary dropdown-toggle">
                    <option value="All" selected>All Colors</option>
                    <option value="alb">Alb</option>
                    <option value="albastru">Albstru</option>
                    <option value="rosu">Rosu</option>
                    <option value="gri">Gri</option>
                </select>
            </div>
            <div class="col-sm">
                <select name="an" class="btn btn-primary dropdown-toggle">
                    <option value="All" selected>All Years</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                </select>
            </div>
            <div class="col-sm">
                <input name="pret_maxim" value="" placeholder="Type in a price range"/>
            </div>
            <div class="col-sm">
                <input class="btn btn-primary btn-sm" type="submit" value="Filtrare"/>
                <a href="/" class="btn btn-primary btn-sm" role="button">Reset</a>
            </div>
        </div>
    </form>
</div>
<hr/>
<div class="" id="results">
    <?php foreach (filterArrayData() as $elem): ?>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?= $elem['model'] ?></h5>
                    <small><?= $elem['price'] ?></small>
                </div>
                <p class="mb-1"><?= $elem['color'] ?></p>
                <p class="mb-1"><?= $elem['year'] ?></p>
            </a>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>

