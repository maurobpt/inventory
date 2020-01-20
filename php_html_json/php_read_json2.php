<html>  
<head>  
    <title>AJAX JSON TO PHP</title>  
</head>  
<body>
<?php
	$data = file_get_contents ('data4.json');
        $json = json_decode($data, true);

	$projects = $json['projects'];

	$max = sizeof($projects);
	for($i = 0; $i < $max;$i++)
	{
	 echo $projects[$i]['project'].'<br />';
	 echo $projects[$i]['description'].'<br />';
	 $maxVersions = sizeof($projects[$i]['versions']);
		for($j = 0; $j < $maxVersions;$j++){
		echo $projects[$i]['versions'][$j]['version'].'<br />';
		echo $projects[$i]['versions'][$j]['url'].'<br />';
		echo $projects[$i]['versions'][$j]['date'].'<br />';
		}

	}
?>
</body>  
</html>  
