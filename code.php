<?php

function writenewmessage()
{
//echo "This is first function";	
	$cars1 ='BMW';
	$car2 ='TATA';
	$car2 ='MAHINDRA';
	$car2 ='SUZUKI';
	$cars = array('BMW','TATA','SUZUKI');
	//print_r($cars);
	//echo "$cars3()";
	//$age=array{
		'raj'=>25,
		'bag'=>35,
		'bah'=>56

	};
	//echo $age['raj'];
	$data= array(
	    array('BMW','TATA','MINDTREE'),
	    array('raj'=>25,'bag'=>35)


	);
	echo"<pre>";
	print_r($data);


writenewmessage();

?>