<?php


class Breadcrumb{
	public $crumbs = array();

	static public function add($caption, $url = null)
	{
		self::$crumbs[] = array(
			'caption' => $caption,
			'url'     => $url
		);
	}

	static public function get($caption, $url = null)
	{
		return self::$crumbs;
	}
}