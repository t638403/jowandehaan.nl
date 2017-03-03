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

/**
 * Check if project exists
 *
 * @param $projectName
 * @return bool
 */
function projectExists($projectName)
{
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

/**
 * Like a template but then a project
 *
 * @param $projectName
 */
function p($projectName, $projectVars = [])
{
	$projectFile = dirname(__DIR__) . "/jowan/projects/$projectName/index.php";
	extract($projectVars);
	ob_start();
	echo "<!-- Project '$projectName' -->";
	include $projectFile;
	return ob_get_clean();
}