<?php

require(dirname(__FILE__).'/../database/db_connection.php');

function getDataFromDatabase():array
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

function filterArrayData():array
{
    $data_arr = getDataFromDatabase();
    $data_arr_final = array();

    if (empty($_GET)) {
        $data_arr_final = $data_arr;
    } else {
        $marca_f = ucfirst($_GET['marca']);
        $culoare_f = ucfirst($_GET['culoare']);
        $an_f = $_GET['an'];
        $pret_maxim_f = trim($_GET['pret_maxim']);

        foreach ($data_arr as $data) {

            if ($marca_f != 'All' && $marca_f != $data['model']) {
                continue;
            }

            if ($culoare_f != 'All' && $culoare_f != $data['color']) {
                continue;
            }

            if ($an_f != 'All' && $an_f != $data['year']) {
                continue;
            }

            if (!empty($pret_maxim_f) && $pret_maxim_f < $data['price']) {
                continue;
            }

            $data_arr_final[] = $data;
        }
    }

    return $data_arr_final;
}

function displayFilteredData():array
{
    $data_arr_final = filterArrayData();
    $output = [];

    foreach ($data_arr_final as $data) {
        $output .= $data['marca'];
        $output .= $data['culoare'];
        $output .= $data['an'];
        $output .= $data['pret'];
    }

    return $output;
}
