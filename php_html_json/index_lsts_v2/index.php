<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>LSTS &raquo; References</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
  <link href="http://lsts.pt/addons/shared_addons/themes/lstsmock/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="http://lsts.pt/addons/shared_addons/themes/lstsmock/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
  <link href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" rel="stylesheet" type="text/css"/>

  <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>

  <meta name="keywords" content="LSTS, DUNE, Neptus, IMC, Documentation, Reference"/>
  <meta name="description" content="LSTS reference documentation" />

  <style type='text/css'>
    .icon, [data-icon]:before {content:none;}
  </style>
</head>

<body>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser.
Please <a href="http://browsehappy.com/">upgrade your browser</a>
or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a>
to improve your experience.
</p>
<![endif]-->

<div class="inner-wrap">
<header>
<div id="top" class="wrap">

<div class="logo" role="banner">
  <a class="nav-btn icon" id="nav-open-btn" href="#nav">&#xe040;</a>
  <a class="logo-img" href="http://lsts.pt/" style="background: url(http://lsts.pt/addons/shared_addons/themes/lstsmock/img/site-logo.png) no-repeat; background-size: contain; text-indent: -999px;"> LSTS </a>
</div>

<nav id="nav" class="block" style="display:none"><div class="block">
  <a class="close-btn icon" id="nav-close-btn" href="#top">&#xe041;</a></div></nav></div>
</header>

<section id="content">
<div class="wrap whiteback">
<div class="row-large">
<div class="box100">

<h3>LSTS Reference Documentation</h3><br/>
<p style="font-size:17px;line-height:19px;text-rendering: optimizelegibility;">
Here you can find reference documentation for the LSTS toolchain. These
documents are generated automatically from the source code and updated
every time a new release is made.
</p>

<p style="font-size:17px;line-height:19px;text-rendering: optimizelegibility;">
The software projects listed here were designed to be interoperable as
long as they use the same IMC version. If one project as several releases
using the same IMC version, then you should use the latest release available.
</p>

<p style="font-size:17px;line-height:19px;text-rendering: optimizelegibility;">
Project versions using matching IMC major and minor version numbers should
also be interoperable but it is always preferable to use matching revision
numbers as well.
</p>

</p>
</div>
</div>
<div class="row-large">
<div class="box50 spacing-group"></div>
<div class="box50"></div>
</div>
<?php
  $data = file_get_contents('index.json');
  $json = json_decode($data, true);
  $projects = $json['projects'];

  $max = sizeof($projects);
  for($i = 0; $i < $max; $i++)
  {
?>

<div data-role="collapsible" data-inset="false">
<h4>

<?php
 echo $projects[$i]['description'] . '<br/>';
?>

</h4>
<ul data-role="listview">

<?php
  $maxVersions = sizeof($projects[$i]['versions']);
  for($j = 0; $j < $maxVersions;$j++)
  {
    $url = $projects[$i]['versions'][$j]['url'];
    $version = $projects[$i]['versions'][$j]['version'];
    $imc = $projects[$i]['versions'][$j]['imc'];
    $imc_url = "imc/imc-$imc";
?>

<li>
<p style="margin-bottom: 0em;">
  <a href="<?php echo $url; ?>/" target="_blank">Version <?php echo $version; ?></a>

<?php if (strlen($imc) > 0) { ?>
<?php if ($imc[strlen($imc) - 1] == 'x') { ?>
[ Unstable IMC <?php echo $imc; ?></a> ]
<?php } else { ?>
[ <a href="<?php echo $imc_url; ?>/" target="_blank">IMC <?php echo $imc; ?></a> ]
<?php } ?>
<?php } ?>

  <br/>
  Release Date: <?php echo $projects[$i]['versions'][$j]['date']; ?>
</p>
</li>

<?php } ?>
</ul>
</div><!-- /collapsible -->

<?php } ?>
</div>

</section>

<div class="bottom">
<div class="wrap">
<div class="row">
<div class="box50">© <?php echo date('Y'); ?> LSTS</div>
</div>
</div>
</div>
</div>
</body>
</html>

</body>
</html>
