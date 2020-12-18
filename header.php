<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
 ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Goldmaster Official Site</title>
	<link href="../Favicon.ico" rel="shortcut icon" title="Favicon">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body class="textlinks" onload="MM_preloadImages('..assets/images/home/HomeHover.svg')" vlink="#FFFFFF">
	<!--<a id="top" name="top"></a> <img alt="" class="hero" maxheight="229" maxwidth="1400" src="../Images/Banner/Banner.svg" width="100%"> <!==Navigation links and names-->


	<div class="topnav" id="myTopnav">
		<a href="../Index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Home','','assets/images/home/HomeHover.svg',1)">
			<img alt="" height="16" id="Home" src="assets/images/home/Home.svg" width="16"></a><a href="../News.html">News From The Den</a>
			<a href="../Discography.html">Discography</a>
			<a href="../Photos.html">Photos</a>
			<a href="../SideProjects.html">Side Projects</a>
			<a class="icon" href="javascript:void(0);" onclick="myFunction()">
			<em class="fa fa-bars"></em></a>
	</div>

	<!--End of navigation links and names part-->

<div id="content_container"><!-- Start the content-->
<!-- Remember to close the content in the cooter -->
