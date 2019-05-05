<link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="images/favicon.png" type="image/png" /> 

<script src="templates/xero/js/jquery.fancybox.js"></script>
<script src="templates/xero/js/jquery.fancybox-media.js"></script>
<script src="templates/xero/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="templates/xero/js/jquery-1.8.3.js"></script>

<link type="text/css" rel="stylesheet" href="/templates/xero/css/jquery.fancybox.css" /> 

<script>
  $('.fancy').fancybox();
  
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90722129-1', 'auto');
  ga('send', 'pageview');

</script>

<?php
/**
 * @package		##package##
 * @subpackage	##subpackage##
 * @author		##author##
 * @copyright 	##copyright##
 * @license		##license##
 * @version		##version##
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Load template logic
if (!defined('TEMPLATE')) {
	define( 'TEMPLATE', basename(dirname(__FILE__)));
}

// Include main Zen Class
include JPATH_THEMES . '/' . TEMPLATE  . '/zen/zen.php';

// Setup the params
$zen = new zen4();

// Check whether to load the mobile detect class
if($zen->params->mobile_detect) {
	$zen->load_mobile_detect();
}
// Include the layout file
include JPATH_THEMES . '/' . TEMPLATE  . '/tpls/default.php';
?>


<style>
  .chzn-container {margin-bottom:50px;}
</style>

<link type="text/css" rel="stylesheet" href="/templates/xero/css/test.css" /> 
