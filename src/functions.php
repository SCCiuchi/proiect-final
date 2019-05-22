<?php
require_once(dirname(__FILE__) . '/../database/db_connection.php');

function insertNewProductInDatabase()
{
    $conn = createDbConnection();

    if (!empty($_GET)) {
        $model = ucfirst($_GET['model']);
        $color = ucfirst($_GET['color']);
        $year = $_GET['year'];
        $price = trim($_GET['price']);
        $url = $_GET['url'];

        $sql = "INSERT INTO `catalog` (model, color, year, price, url)
            VALUES ('{$model}', '{$color}', '{$year}', '{$price}', '{$url}')";

        if ($conn->query($sql) === true) {
            echo "New product added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo 'Incorrect data inserted';
    }
}

function getDataFromDatabase(): array
{
    $conn = createDbConnection();

    $sql = "SELECT * FROM `catalog`";
    $result = $conn->query($sql);
    $output = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $output[] = $row;
        }
    }
    $conn->close();

    return $output;
}

function filterArrayData(): array
{
    $data_arr = getDataFromDatabase();
    $data_arr_final = array();

    if (empty($_GET)) {
        $data_arr_final = $data_arr;
    } else {
        $model_f = ucfirst($_GET['model']);
        $color_f = ucfirst($_GET['color']);
        $year_f = $_GET['year'];
        $price_f = trim($_GET['price']);

        foreach ($data_arr as $data) {

            if ($model_f != 'All' && $model_f != $data['model']) {
                continue;
            }

            if ($color_f != 'All' && $color_f != $data['color']) {
                continue;
            }

            if ($year_f != 'All' && $year_f != $data['year']) {
                continue;
            }

            if (!empty($price_f) && $price_f < $data['price']) {
                continue;
            }

            $data_arr_final[] = $data;
        }
    }

    return $data_arr_final;
}

function displayFilteredData(): array
{
    $data_arr_final = filterArrayData();
    $output = [];

    foreach ($data_arr_final as $data) {
        $output .= $data['model'];
        $output .= $data['color'];
        $output .= $data['year'];
        $output .= $data['price'];
        $output .= $data['url'];
    }

    return $output;
}
