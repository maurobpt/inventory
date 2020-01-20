    <html>  
    <head>  
        <title>AJAX Crawlable Application</title>  
        <meta name="fragment" content="!" />  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  
        <script src="ajax.js" type="text/javascript"></script>  
    </head>  
    <body>  
        <h2>AJAX Crawlable Application</h2>  
        <table>  
            <tr>  
                <td style="width:40%">  
                    <div><a href="#!page1">Page 1</a></div>  
                    <div><a href="#!page2">Page 2</a></div>  
                    <div><a href="#!page3">Page 3</a></div>  
                </td>  
                <td>  
                    <div id="page"><?require_once("ajax.php");?></div>  
                </td>  
            </tr>  
        </table>  
    </body>  
    </html>  
