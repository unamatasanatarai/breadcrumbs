<?php


class BreadcrumbsDecorator{

	static public function render($separator = '/')
	{
		$crumbs = Breadcrumb::get();
		$html = array();
		foreach($crumbs as $crumb){
			if (empty($crumb['url']){
				$html[] = $crumb['caption'];
			}else{
				$html[] = '<a href="' . $crumb['url'] . '">' . $crumb['caption'] . '</a>';
			}
		}

		return implode($separator, $html);
	}
}