<?php

/**
 * Escape characters that have meaning in HTML
 *
 * @param $string
 * @return string
 */
function h($string)
{
	return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Read a template from te template dir
 *
 * @param $templateName
 * @param array $templateVars
 * @return string
 */
function t($templateName, $templateVars = [])
{
	$templateFile = dirname(__DIR__) . "/jowan/template/$templateName.php";
	extract($templateVars);
	ob_start();
	echo "<!-- Template '$templateName' -->";
	include $templateFile;
	return ob_get_clean();
}

function projectExists($projectName) {
	$dirs = scandir(__DIR__ . '/projects/');
	foreach($dirs as $dir)
	{
		if($dir == $projectName)
		{
			return true;
		}
	}
	return false;
}