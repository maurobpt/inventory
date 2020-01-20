<?php
	$data = file_get_contents ('data4.json');
        $json = json_decode($data, true);

	//print_r($json).'<br/>';

	$projects = $json['projects'];
	//echo 'projects: '.$projects. '<br/>';

	//$project = $projects['project'];
	//echo 'project: '.$project. '<br/>';

	//description
	//echo $projects[0]['project'];
	//version
	//echo $projects[0]['versions'][0]['version'];
	//MANUAL PRINT 
	//IMC
	//echo 'projects[0][project]: '.$projects[0]['project'].'<br />';
	//echo 'projects[0][description]: '.$projects[0]['description'].'<br />';
	//echo 'projects[0][versions]: '.$projects[0]['versions'].'<br />'; -->error
	//DUNE	
	//echo 'projects[1][project]: '.$projects[1]['project'].'<br />';
	//echo 'projects[1][description]: '.$projects[1]['description'].'<br />';
	//echo 'projects[1][versions]: '.$projects[1]['versions'].'<br />'; -->error
	//Neptus	
	//echo 'projects[2][project]: '.$projects[2]['project'].'<br />';
	//echo 'projects[2][description]: '.$projects[2]['description'].'<br />';
	//echo 'projects[2][versions]: '.$projects[2]['versions'].'<br />'; -->error


	//echo '<br /><br />--projects--<br />';
	//RECURSIVE PRINT
	$max = sizeof($projects);
	for($i = 0; $i < $max;$i++)
	{
	 echo $projects[$i]['project'].'<br />';
	 echo $projects[$i]['description'].'<br />';
	 $maxVersions = sizeof($projects[$i]['versions']);
	 //echo $maxVersions;
		for($j = 0; $j < $maxVersions;$j++){
		echo $projects[$i]['versions'][$j]['version'].'<br />';
		echo $projects[$i]['versions'][$j]['url'].'<br />';
		echo $projects[$i]['versions'][$j]['date'].'<br />';
		}

	}

	/*foreach( $projects as $pos => $project){
		echo 'pos:'.$pos.', project:'.$project[$pos].'<br />';
	}*/


	/*foreach($json->projects as $projects)
	{
	    echo $projects. "\n";
	    foreach($projects->project as $project) {
		echo $project. "\n";
	    }

	}*/



//echo $json ;
        /*foreach ($json as $key => $value) {
	echo 'key: '.$key. '<br/>';
	echo 'value: '.$value. '<br/>';
            if (!is_array($value)) {
                echo $key . '=>' . $value . '<br/>';
            } else {
                foreach ($value as $key => $val) {
                    echo $key . '=>' . $val . '<br/>';
                }
            }
        }*/
/*foreach ($json->projects as $item) {
   var_dump($item->project->version);
}*/

	//$projects = $json['projects'];
	//echo 'projects: '.$projects. '<br/>';
	//$project[] = $json['project'];
	//echo 'project: '.$project. '<br/>';
	//$description = $projects['description'];
	//echo 'project description: '.$description. '<br/>';

?>
