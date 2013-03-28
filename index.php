<?php

require_once('arrayXpathFactory.php');
require_once('arrayXpath.php');

$testData = array(
	'manufacturer' => array(
		'1' => array(
			'name' => 'Ford',
			'models' => array(
				'1' => array(
					'model-name' => 'Fiesta',
					'model-type' => 'Car',
				),
				'2' => array(
					'model-name' => 'Transit',
					'model-type' => 'Van',
				),
			),
		),
		'2' => array(
			'name' => 'Volkswagen',
			'models' => array(
				'1' => array(
					'model-name' => 'Golf',
					'model-type' => 'Car',
				),
			),
		),
	),
);


$fact = new arrayXpathFactory();
$inst = $fact->createInstance($testData);
$arrFiltered = $inst->filter('manufacturer/*/models/*/model-type');
echo '<pre>';
print_r( $arrFiltered );
echo '</pre>';

$arrFiltered2 = $inst->filter('manufacturer/*/name');
echo '<pre>';
print_r( $arrFiltered2 );
echo '</pre>';

?>