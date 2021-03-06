<?php
require_once(dirname(__FILE__).'/src/functions.php');
?>
<html>
<head>
    <title>Car Listing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container" id="filter-container"
     style="height: auto; margin-top: 20px; margin-bottom: 20px; margin-left: fill; margin-right: fill;">
    <form method="get" action="" autocomplete="off" style="justify-content: center">
        <div class="row" style="flex: content-box; justify-content: center">
            <div class="col-sm">
                <select name="model" class="btn btn-primary btn-lg dropdown-toggle" style="padding-bottom: 12px; padding-top: 12px; padding-left: 8px; padding-right: 8px" id="model-filter">
                    <option value="All" selected>All Models</option>
                    <option value="Dacia">Dacia</option>
                    <option value="Ford">Ford</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Seat">Seat</option>
                    <option value="Mazda">Mazda</option>
                </select>
            </div>
            <div class="col-sm">
                <select name="color" class="btn btn-primary btn-lg dropdown-toggle" style="padding-bottom: 12px; padding-top: 12px; padding-left: 8px; padding-right: 8px" id="color-filter">
                    <option value="All" selected>All Colors</option>
                    <option value="alb">Alb</option>
                    <option value="albastru">Albstru</option>
                    <option value="rosu">Rosu</option>
                    <option value="gri">Gri</option>
                    <option value="negru">Negru</option>
                    <option value="gri">Verde</option>
                </select>
            </div>
            <div class="col-sm">
                <select name="year" class="btn btn-primary btn-lg dropdown-toggle" style="padding-bottom: 12px; padding-top: 12px; padding-left: 8px; padding-right: 8px" id="year-filter">
                    <option value="All" selected>All Years</option>
                    <option value="2016">2009</option>
                    <option value="2016">2010</option>
                    <option value="2016">2011</option>
                    <option value="2016">2012</option>
                    <option value="2016">2013</option>
                    <option value="2016">2014</option>
                    <option value="2016">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2018">2019</option>
                </select>
            </div>
            <div class="col-sm">
                <input name="price" style="padding-bottom: 12px; padding-top: 12px; padding-left: 8px; padding-right: 8px" value="" placeholder="Type in maximum price..." id="max-price"/>
            </div>
            <div class="col-sm">
                <input class="btn btn-primary btn-lg" style="padding-bottom: 12px; padding-top: 12px; padding-left: 8px; padding-right: 8px" id="search-button" type="submit" value="Search"/>
            </div>
            <div class="col-sm">
                <a href="/" class="btn btn-primary btn-lg" style="padding-bottom: 12px; padding-top: 12px; padding-left: 8px; padding-right: 8px" id="reset-button" role="button">Reset</a>
            </div>
            <div class="col-sm">
                <a href="/views/add_product.php" class="btn btn-primary btn-lg" style="padding-bottom: 12px; padding-top: 12px; padding-left: 8px; padding-right: 8px" id="add-button" role="button">Add Product</a>
            </div>
        </div>
    </form>
</div>
<hr id="separator" style="border-top: 1px dashed black; border-radius: 35px;"/>
<div class="" id="results">
    <?php foreach (filterArrayData() as $elem): ?>
        <div class="list-group" id="dynamic-card">
            <a name="url" href="<?= $elem['url'] ?>" target="_blank" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><strong><?= $elem['model'] ?></strong></h5>
                    <small><strong>Price: </strong><?= $elem['price'] ?><strong> &euro;</strong></small>
                </div>
                <p class="mb-1"><?= $elem['color'] ?></p>
                <p class="mb-1"><?= $elem['year'] ?></p>
                <small><cite> Click for details </cite></small>
            </a>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
