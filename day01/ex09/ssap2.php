#!/usr/bin/php
<?php
function ft_split($str) {
	$str = trim($str);
	$str = str_replace(array('\t', '\n', '	'), '', $str);
	$split = explode(" ", $str);
	$split = array_filter($split, "strlen");
	return $split;
}


if ($argc != 1)
{
	$e = array();
	foreach ($argv as $arg) {
		if ($arg != $argv[0])
		{
			$tab = ft_split($arg);
			$e = array_merge($e, $tab);
		}
	}
	foreach ($e as $ele) {
		if(is_numeric($ele) == TRUE)
		{
			$numeric[] = $ele;
		}
	}
	sort($numeric, SORT_STRING);
	foreach ($e as $ele) {
		if(ctype_alpha($ele) == TRUE)
		{
			$string[] = $ele;
		}
	}
	sort($string, SORT_NATURAL | SORT_FLAG_CASE);
	foreach ($e as $ele) {
		if(ctype_alpha($ele) == FALSE && is_numeric($ele) == FALSE)
		{
			$ascii[] = $ele;
		}
	}
	sort($ascii);
	foreach($string as $element)
	{
		echo $element;
		echo "\n";
	}
	foreach($numeric as $element)
	{
		echo $element;
		echo "\n";
	}
	foreach($ascii as $element)
	{
		echo $element;
		echo "\n";
	}
}