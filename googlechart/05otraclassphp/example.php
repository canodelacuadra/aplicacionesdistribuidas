 <?
//Google chart examples
include 'chart.php';

//Simple examples with same info different kind of charts
$example = array ( 
						array (
							'Browser'	=> 'IE',
							'%' 		=> '34.81',
						),
						array (
							'Browser'	=> 'Chrome',
							'%' 		=> '30.81',
						),
						array (
							'Browser'	=> 'Firefox',
							'%' 		=> '24.98',
						),
						array (
							'Browser'	=> 'Opera',
							'%' 		=> '1.78',
						),
						array (
							'Browser'	=> 'Other',
							'%' 		=> '6.72',
						),
					);

echo Chart::pie($example,array('title'=>'Broswer stats March 2012','height'=>600,'width'=>900));
echo Chart::bar($example,array('title'=>'Broswer stats March 2012','height'=>600,'width'=>900));
echo Chart::gauge($example,array('title'=>'Broswer stats March 2012','height'=>200,'width'=>1000));

//multi columns example, first element array determines the elements
$os_example = array(
	array(
		'date'		=> '2011-10',
		'WinXP'		=> '37.91',
		'Win7'		=> '40.5',
		'WinVista'	=> '11.18',
		'MacOSX'	=> '7.18',
		'iOS'		=> '1.12',
		'Other'		=> '1.42',
	),
	array(
		'date'		=> '2011-11',
		'WinXP'		=> '36.44',
		'Win7'		=> '41.13',
		'WinVista'	=> '11.12',
		'MacOSX'	=> '7.05',
		'iOS'		=> '1.24',
		'Other'		=> '1.56',
	),
	array(
		'date'		=> '2011-12',
		'WinXP'		=> '34.78',
		'Win7'		=> '42.65',
		'WinVista'	=> '10.88',
		'MacOSX'	=> '7.01',
		'iOS'		=> '1.41',
		'Other'		=> '1.62',
	),
	array(
		'date'		=> '2012-01',
		'WinXP'		=> '34.04',
		'Win7'		=> '44.07',
		'WinVista'	=> '10.45',
		'MacOSX'	=> '7.33',
		'iOS'		=> '1.71',
		'Other'		=> '1.66',
	),
	array(
		'date'		=> '2012-02',
		'WinXP'		=> '34.04',
		'Win7'		=> '45.23',
		'WinVista'	=> '9.87',
		'MacOSX'	=> '7.41',
		'iOS'		=> '1.81',
		'Other'		=> '1.63',
	),
	array(
		'date'		=> '2012-03',
		'WinXP'		=> '33.49',
		'Win7'		=> '46.48',
		'WinVista'	=> '9.05',
		'MacOSX'	=> '7.32',
		'iOS'		=> '1.89',
		'Other'		=> '1.77',
	),

);

$options = array('title'=>'OS stats','height'=>600,'width'=>900);
echo Chart::line($os_example,$options);
echo Chart::column($os_example,$options);
echo Chart::bar($os_example,$options);
echo Chart::area($os_example,$options);
echo Chart::bubble($os_example,$options);


//combined chart column + line, perfect to compare 2 different data in same scale
$os_example = array(
	array(
			'date'		=> '2011-10',
			'WinXP'		=> '37.91',
			'IE9'		=> '9.58',
	),
	array(
			'date'		=> '2011-11',
			'WinXP'		=> '36.44',
			'IE9'		=> '10.13',
	),
	array(
			'date'		=> '2011-12',
			'WinXP'		=> '34.78',
			'IE9'		=> '10.74',
	),
	array(
			'date'		=> '2012-01',
			'WinXP'		=> '34.04',
			'IE9'		=> '11.44',
	),
	array(
			'date'		=> '2012-02',
			'WinXP'		=> '34.04',
			'IE9'		=> '12.08',
	),
	array(
			'date'		=> '2012-03',
			'WinXP'		=> '33.49',
			'IE9'		=> '14.53',
	),
);

echo Chart::area($os_example,array('title'=>'WinXP VS IE9','height'=>600,'width'=>600,
									'series'=>'{0:{targetAxisIndex:1,type: "line", visibleInLegend: true}}'));

//geo mark, to place data in a country. Use country code!
$example_cities = array (
	array (
	    'City' => 'Madrid',
	    'Population' => '6,458,684',
	    //'Area'	=> '607 km2',
	),
	array (
	    'City' => 'Barcelona',
	    'Population' => '3,218,07',
	   // 'Area'	=> '101.9 km2',
	),
	array (
	    'City' => 'Valencia',
	    'Population' => '1,705,742',
	  //  'Area'	=> '134.65 km2',
	),
	array (
	    'City' => 'Zaragoza',
	    'Population' => '701,090',
	   // 'Area'	=> '1,062.64 km2',
	),
	array (
	    'City' => 'Sevilla',
	    'Population' => '1,508,609',
		//'Area'	=> '140 km2',
	),
	
	array (
	    'City' => 'Bilbao',
	    'Population' => '875,552',
	   // 'Area'	=> '40.65 km2',
	),
);

echo Chart::geomarkers($example_cities,array('title'=>'WinXP VS IE9','height'=>600,'width'=>600),'ES');