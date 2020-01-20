<html>
<head>  
    <title>AJAX JSON TO PHP 2</title> 
    <style type="text/css">
      th {background-color: #ccc; padding: 0.5em;}
    </style> 
</head>  
<body>
<?php
	$data = file_get_contents ('data4.json');
        $json = json_decode($data, true);

	$projects = $json['projects'];
?>
<table>
<?php
	$max = sizeof($projects);
	for($i = 0; $i < $max;$i++)
	{
?>
<tr><th>
<?php
	 echo $projects[$i]['description'].'<br />';
?>
</th></tr>
<?php
	 $maxVersions = sizeof($projects[$i]['versions']);
		for($j = 0; $j < $maxVersions;$j++){
?>
<tr><td>
<p><a href="<?php echo $projects[$i]['versions'][$j]['url']; ?>">Version <?php echo $projects[$i]['versions'][$j]['version']; ?></a><br/>Release Date: <?php echo $projects[$i]['versions'][$j]['date']; ?></p>
<?php
		//echo $projects[$i]['versions'][$j]['version'].'<br />';
		//echo $projects[$i]['versions'][$j]['url'].'<br />';
		//echo $projects[$i]['versions'][$j]['date'].'<br />';
?>
</td></tr>
<tr><td></td></tr>
<?php

		}

	}
?>
</table>
</body>  
</html>  
