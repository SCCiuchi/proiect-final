<?php
include(dirname(__FILE__) . '../src/functions.php');
?>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form method="get" action="" autocomplete="off" style="justify-content: center">
        <div class="container" style="flex: content-box; justify-content: center">
            <div class="row col-sm">
                <input name="model" style="margin-top: 150px; margin-left: 15px;" value="" placeholder="Model.." id="type-model"/>
            </div>
            <div class="row col-sm">
                <input name="color" style="margin-top: 30px; margin-left: 15px;" value="" placeholder="Color.." id="type-color"/>
            </div>
            <div class="row col-sm">
                <input name="year" style="margin-top: 30px; margin-left: 15px;" value="" placeholder="Year.." id="type-year"/>
            </div>
            <div class="row col-sm">
                <input name="price" style="margin-top: 30px; margin-left: 15px;" value="" placeholder="Price.." id="type-price"/>
            </div>
            <div class="row col-sm">
                <input name="url" style="margin-top: 30px; margin-left: 15px;" value="" placeholder="URL.." id="type-url"/>
            </div>
            <input class="btn btn-primary btn-lg" style="margin-top: 25px; margin-left: 20px;" id="add-product" type="submit" value="Add Product"/>
            <a href="../index.php" class="btn btn-primary btn-lg" style="margin-top: 25px; margin-left: 10px;" id="back" role="button">Go Back</a>
    </form>
<hr id="separator" style="margin-top: 20px; border-top: 1px dashed black; border-radius: 35px;"/>
    <?php insertNewProductInDatabase();?>
</body>
</html>
