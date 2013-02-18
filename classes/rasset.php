<?php

namespace Rasset;

class Rasset
{
	protected static $_js  = array();
	protected static $_css = array();
	
	public static function js($path)
	{
		array_push(static::$_js, $path);
	}

	public static function css($path)
	{
		array_push(static::$_css, $path);
	}

	public static function render_js()
	{
		$html = '';
		foreach (static::$_js as $path)
		{
			$html.= '<script src="'.$path.'" type="text/javascript" ></script>' . "\n";
		}
		return $html;
	}

	public static function render_css()
	{
		$html = '';
		foreach (static::$_js as $path)
		{
			$html.= '<link rel="stylesheet" href="'.$path.'" type="text/css" />';
		}
		return $html;
	}

}