<?php

class BreadcrumbDecorator{

	static public function bootstrap()
	{
		$crumbs = Breadcrumb::get();
		$html = '<ol class="breadcrumb">';
		for($i = 0; $i < sizeOf($crumbs); $i++){
			$crumb = $crumbs[$i];
			$class = $i == sizeOf($crumbs) - 1
				? ' class="active"'
				: '';

			$html .= "<li$class>";

			if(empty($crumb['url'])){
				$html .= $crumb['caption'];
			}else{
				$html .= '<a href="' . $crumb['url'] . '">' . $crumb['caption'] . '</a>';
			}
		}

		return $html . '</ol>';
	}
}
