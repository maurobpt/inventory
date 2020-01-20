<!DOCTYPE html> 
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]--> <!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]--> <!--[if IE 8]><html class="no-js lt-ie9"><![endif]--> <!--[if gt IE 8]><!-->
<html class="no-js"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>LSTS &raquo; References</title>
<meta name="author" content="Hugo Dias">
<meta name="viewport" content="width=device-width,initial-scale=1">
<base href="http://lsts.pt/"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="http://lsts.pt/addons/shared_addons/themes/lstsmock/css/style.css" rel="stylesheet" type="text/css" />
<link href="http://lsts.pt/addons/shared_addons/themes/lstsmock/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<script src="http://lsts.pt/addons/shared_addons/themes/lstsmock/js/modernizr.js" type="text/javascript"></script>
<script type="text/javascript">
					var APPPATH_URI = "/system/cms/";
					var BASE_URI = "/";
				</script>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
<link rel="canonical" href="http://lsts.pt/about/papers" />
<link rel="alternate" type="application/rss+xml" title="LSTS" href="http://lsts.pt/blog/rss/all.rss" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<style type='text/css'>
.icon, [data-icon]:before {content:none;}
</style>
</head>
<body class="about">
<!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->
<div class="inner-wrap">
<header><div id="top" class="wrap"><div class="logo" role="banner"><a class="nav-btn icon" id="nav-open-btn" href="#nav">&#xe040;</a> <a class="logo-img" href="http://lsts.pt/" style="background: url(http://lsts.pt/addons/shared_addons/themes/lstsmock/img/site-logo.png) no-repeat; background-size: contain; text-indent: -999px;"> LSTS </a></div><nav id="nav" class="block"><div class="block"><ul role="navigation" > <li class="first"><a href="http://lsts.pt/blog">Blog</a></li><li><a href="http://lsts.pt/vehicles">Vehicles</a></li><li><a href="http://lsts.pt/software">Software</a></li><li><a href="http://lsts.pt/about/projects">Projects</a></li><li class="active"><a href="http://lsts.pt/about/papers">Publications</a></li><li class="last"><a href="http://lsts.pt/about">About</a></li> </ul> <a class="close-btn icon" id="nav-close-btn" href="#top">&#xe041;</a></div></nav></div></header>
<section id="content">
<div class="wrap whiteback">
<div class="row-large">
<div class="box100">
<h3>LSTS Reference Documentation</h3><br/>
<p style="font-size:17px;line-height:19px;text-rendering: optimizelegibility;">Here you can find reference documentation for the LSTS toolchain. These documents are generated automatically from the source code and updated every time a new release is made.
</p>
</div>
</div>
<div class="row-large">
<div class="box50 spacing-group"></div>
<div class="box50"></div>
</div>
<?php
	$data = file_get_contents ('data4.json');
        $json = json_decode($data, true);
	$projects = $json['projects'];
?>

<?php
	$max = sizeof($projects);
	for($i = 0; $i < $max;$i++)
	{
?>
<div data-role="collapsible" data-inset="false">
    <h4>
<?php
	 echo $projects[$i]['description'].'<br />';
?>
</h4>
<ul data-role="listview">
<?php
	 $maxVersions = sizeof($projects[$i]['versions']);
		for($j = 0; $j < $maxVersions;$j++){
?>
<li><a href="<?php echo $projects[$i]['versions'][$j]['url']; ?>">
Version <?php echo $projects[$i]['versions'][$j]['version']; ?> - Release Date: <?php echo $projects[$i]['versions'][$j]['date']; ?>
</a></li>
<?php
		}
?>
</ul>
</div><!-- /collapsible -->
<?php
	}
?>
</div></section> 
<footer class="footer"><div class="wrap"><div class="row-medium"><div class="box33 widget"><h6>Contacts</h6><ul class="contacts"> <li><i class="icon">&#xe00a;</i></li> <li> <address> <strong>Dep. de Eng. Electrotécnica e de Computadores</strong><br>Rua Dr. Roberto Frias s/n, sala I203/4<br>4200-465 Porto, Portugal<br><br><abbr title="Phone">Phone:</abbr> +351 22 508 1539<br><abbr title="Fax">Fax:</abbr> +351 22 508 1443<br><abbr title="VOIP">Voip:</abbr> +351 22 557 4199 + 3223<br><br><a href="mailto:#">lsts@fe.up.pt</a> </address> </li> </ul></div><div class="box33 widget"><h6>Quick Links</h6><div class="quick_link"><h5><a href= "http://ngcuv.udg.edu/">NGCUV´2015</a></h5></div><div class="quick_link"><h5><a href= "http://fp7-sunrise.eu/">Project SUNRISE</a></h5></div><div class="quick_link"><h5><a href= "http://sunfish.lsts.pt/">Sunfish Tracking Experiment</a></h5></div><div class="quick_link"><h5><a href= "http://project-netmar.eu/">Project NETMAR</a></h5></div><div class="quick_link"><h5><a href= "http://www.noptilus-fp7.eu/">Noptilus</a></h5></div><!--<h6>Recent Tweets</h6><ul class="rss"> </ul>--></div><div class="box33 widget"><h6>Navigation</h6><ul class="navigation">
<li class="first"><a href="http://lsts.pt/blog">Blog</a></li><li><a href="http://lsts.pt/vehicles">Vehicles</a></li><li><a href="http://lsts.pt/software">Software</a></li><li><a href="http://lsts.pt/about/projects">Projects</a></li><li class="current"><a href="http://lsts.pt/about/papers">Publications</a></li><li class="last"><a href="http://lsts.pt/about">About</a></li>
</ul><br><h6>Stay Connected</h6><small>We're available in a bunch of different places, ask questions, chat with us or just say hi! </small> <ul class="unstyled follow"> <li><a href="https://twitter.com/lstsfeup" class="twitter hint hint--left" data-hint="Twitter"><i class="icon">&#xe01c;</i></a></li> <li><a href="https://www.facebook.com/lsts.feup" class="facebook hint hint--left" data-hint="Facebook"><i class="icon">&#xe023;</i></a></li> <li><a href="https://plus.google.com/u/0/105115805692921913369" class="google hint hint--left" data-hint="Google +"><i class="icon">&#xe036;</i></a></li> <li><a href="https://www.linkedin.com/company/lsts-feup" class="linkedin hint hint--left" data-hint="LinkedIn"><i class="icon">&#xf0e1;</i></a></li> <li><a href="http://www.youtube.com/user/lstsvideos" class="youtube hint hint--left" data-hint="YouTube"><i class="icon">&#xe020;</i></a></li> <li><a href="http://lsts.pt/blog/rss/all.rss" class="feed hint hint--left" data-hint="RSS Feed"><i class="icon">&#xe035;</i></a></li> </ul></div></div></div></footer>
<div class="bottom"><div class="wrap"><div class="row"><div class="box50">© 2013 LSTS.</div><div class="box50" style="text-align: right"><a href="#top">Back to the top</a></div></div></div></div></div><script src="http://lsts.pt/addons/shared_addons/themes/lstsmock/js/jquery.js" type="text/javascript"></script><script src="http://lsts.pt/addons/shared_addons/themes/lstsmock/js/build.js" type="text/javascript"></script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-53733890-1'], ['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();

</script></body></html>
</body>  
</html>  
