<?php
	$brands = array(
		array(
			'name' => 'Oracle',
			'popularity' => 5
			),
		array(
			'name' => 'Microsoft',
			'popularity' => 10
			),
		array(
			'name' => '1C',
			'popularity' => '2'
			));


	function my_sort($a, $b)
	{
		if($a['popularity'] == $b['popularity'])
		{
			return 0;
		}		

		return ($a['popularity'] > $b['popularity']) ? -1 : 1;
	}

	uasort($brands,'my_sort');
	print_r($brands);
?>