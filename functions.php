<?php

function generare_rezultate() {
	
	// transformam fisierul csv intr-un array
	
	$file_str = file_get_contents('data.csv');
	$rows_arr = explode("\r\n", $file_str);
	
	$data_arr = array();
	
	foreach ($rows_arr as $row) {
	
		$row_arr = explode('|', $row);
		
		$row_arr_final = array(
			'marca' => trim($row_arr[0]),
			'culoare' => trim($row_arr[1]),
			'an' => trim($row_arr[2]),
			'pret' => trim($row_arr[3])
		);
		
		$data_arr[] = $row_arr_final;
		
	}
	
	// filtram array-ul de date
	
	$data_arr_final = array();
	
	if (empty($_GET)) {
		
		$data_arr_final = $data_arr;		
		
	} else {
		
		$marca_f = $_GET['marca'];
		$culoare_f = $_GET['culoare'];
		$an_f = $_GET['an'];
		$pret_maxim_f = trim($_GET['pret_maxim']);
		
		foreach ($data_arr as $data) {
			
			$is_valid = true;
			
			if ($marca_f != 'all' && $marca_f != $data['marca']) {
				$is_valid = false;				
			}
			else if ($culoare_f != 'all' && $culoare_f != $data['culoare']) {
				$is_valid = false;	
			}
			else if ($an_f != 'all' && $an_f != $data['an']) {
				$is_valid = false;				
			}
			else if (!empty($pret_maxim_f) && $pret_maxim_f <		$data['pret']) {
				$is_valid = false;
			}
			
			if ($is_valid) { $data_arr_final[] = $data; }
			
		}
		
	}
	
	// afisam datele
	
	$output = '';
	
	foreach ($data_arr_final as $data) {
		
		$output .= '<ul>';
		
		$output .= '<li>Marca: '.$data['marca'].'</li>';
		$output .= '<li>Culoare: '.$data['culoare'].'</li>';
		$output .= '<li>An: '.$data['an'].'</li>';
		$output .= '<li>Pret: '.$data['pret'].'</li>';
		
		$output .= '</ul>';
		
	}
	
	return $output;
	
}

