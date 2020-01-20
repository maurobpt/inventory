    <!--html>  
    <head>  
        <title>AJAX data</title>  
    </head>  
    <body-->  
    <?  
        if(isset($_GET['_escaped_fragment_']))  
            $hash_fragment = $_GET['_escaped_fragment_'];  
      
        $page = array(  
            "page1" => "This is page 1.",  
            "page2" => "This is page 2.",  
            "page3" => "This is page 3."  
        );  
      
        if(isset($hash_fragment)) {  
            echo $page[$hash_fragment];  
        }  
    ?>  
    <!--/body>  
    </html-->  
