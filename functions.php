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

function t($templateName, $templateVars = [])
{
	$templateFile = dirname(__DIR__) . "/jowan/template/$templateName.php";
	extract($templateVars);
	ob_start();
	include $templateFile;
	return ob_get_clean();
}