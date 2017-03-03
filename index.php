<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Jowan</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">


	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicon/manifest.json">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/masonry.pkgd.min.js"></script>

</head>
<body>

<?php

    include(__DIR__ . '/header.php');

	echo '<div id="content">';
	$_GET['type'] = isset($_GET['type'])?$_GET['type']:'home';
    switch($_GET['type']) {

		/**
		 * HOME
		 */
		case 'home':
			/*include(__DIR__ . '/jumbotron.php');*/
			include(__DIR__ . '/project_overview.php');
//			include(__DIR__ . '/footer.php');
			break;

        /**
         * ABOUT
         */
        case 'about':
            include(__DIR__ . '/about.php');
//            include(__DIR__ . '/footer.php');
            break;

        /**
         * PROJECTS
         */
        case 'project':
            include(__DIR__ . '/project.php');
            include(__DIR__ . '/project_overview.php');
//            include(__DIR__ . '/footer.php');
            break;

        /**
         * PROJECT OVERVIEW
         */
        case 'project_overview':
        default:
            include(__DIR__ . '/project_overview.php');
//            include(__DIR__ . '/footer.php');
            break;

        /**
         * ABOUT
         */
        case 'studio':
        include(__DIR__ . '/studio.php');
//        include(__DIR__ . '/footer.php');
    }

?>

<!-- javascripts -->

<script type="text/javascript">

	window.onload = function() {

		$('.grid').masonry({
			itemSelector: '.grid-item',
			gutter: 30
		});

	};

	function isScrollablContent() {
		var $content = $('#content');
		return ($content.find('.container').height() > $content.height());
	}

	function addScrollingClass() {

		// Checking the difference between the container in the nav bar and the container in the #content section to
		// prevent scroll bar issues
		var diff = ($('nav > .container').offset().left - $('#content > .container').offset().left);

		var $content = $('#content');
		$content.removeClass('scrolling');
		$content.css('padding-right', '20px');
		if(isScrollablContent()) {
			$content.css('padding-right', (diff - 2) + 'px');
			$content.addClass('scrolling');
		}
	}



	$(document).ready(function() {

		addScrollingClass();



	});
	$(window).resize(addScrollingClass);

</script>


</body>
</html>