<?php

class BreadcrumbDecorator{

	static public function bootstrap()
	{
		$crumbs = Breadcrumb::get();
		$html = '<ol class="breadcrumb">';
		for($i = 0; $i < sizeOf($crumbs); $i++){
			$class = $i == sizeOf($crumbs) - 1
				? ' class="active"'
				: '';

			$html .= "<li$class>";

			if ($i == 0){
				$html .= '<a href="' . $crumb['url'] . '"><i class="fa fa-dashboard fa-fw"></i></a>';
			}elseif(empty($crumb['url'])){
				$html = $crumb['caption'];
			}else{
				$html = '<a href="' . $crumb['url'] . '">' . $crumb['caption'] . '</a>';
			}
		}

		return $html . '</ol>';
	}
}
