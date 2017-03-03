<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Jowan</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">

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
			include(__DIR__ . '/jumbotron.php');
			include(__DIR__ . '/project_overview.php');
			break;

        /**
         * ABOUT
         */
        case 'about':
            include(__DIR__ . '/about.php');
            break;

        /**
         * PROJECTS
         */
        case 'project':
            include(__DIR__ . '/project.php');
            include(__DIR__ . '/project_overview.php');
            break;

        /**
         * PROJECT OVERVIEW
         */
        case 'project_overview':
        default:
            include(__DIR__ . '/project_overview.php');
            break;

        /**
         * ABOUT
         */
        case 'studio':
        include(__DIR__ . '/studio.php');
    }
	echo '</div>';
    include(__DIR__ . '/footer.php');

?>

<!-- javascripts -->

<script type="text/javascript">

	window.onload = function() {

		$('.grid').masonry({
			itemSelector: '.grid-item',
			gutter: 30
		});

	};

	function correctsScrollBarWidth() {

		// Checking the difference between the container in the nav bar and the container in the #content section to
		// prevent scroll bar issues
		var diff = ($('nav > .container').offset().left - $('#content > .container').offset().left);

		var $content = $('#content');
		$content.css('padding-right', (diff - 2) + 'px');
		$content.addClass('scrolling');
	}

	$(document).ready(correctsScrollBarWidth);
	$(window).resize(correctsScrollBarWidth);

</script>


</body>
</html>