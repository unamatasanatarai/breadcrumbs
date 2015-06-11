<?php


class Breadcrumb{
	static $crumbs = array();

	static public function add($caption, $url = null)
	{
		self::$crumbs[] = array(
			'caption' => $caption,
			'url'     => $url
		);
	}

	static public function get()
	{
		return self::$crumbs;
	}
}
