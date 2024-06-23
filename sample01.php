<?php

$array = [
	'is_aaaa'       => $this->navCurrentClass($page_slug, 'aaaaaaaa'),
	'is_bbbbbbb'       => $this->navCurrentClass($page_slug, ['bbbbb','ccccc','dddd','ffff','eeeee']),
	'is_ccccccccc'       => $this->navCurrentClass($page_slug, 'gggggg'),
	'is_dddd'       => $this->navCurrentClass($page_slug, 'hhhhh'),
	'is_ffff'       => $this->navCurrentClass($page_slug, 'iiii'),
	'is_g' => $this->navCurrentClass($page_slug, 'jjjjjjj'),
	'is_hhhh'   => $this->navCurrentClass($page_slug, ['kkkkk','llllll','mmmmmmm','nnnnnnn','ooooooo','ppppp']),
	'is_iiiiiiiii'       => $this->navCurrentClass($page_slug, ['qqqqq','rrrr','sssss','tttttt']),
	'is_jjjjjj' => $this->navCurrentClass($page_slug, 'uuuuuuu')
];

function navCurrentClass($page_slug, $nav_slug){
	if( is_array($nav_slug) ){

		$is_match = false;
		foreach ($nav_slug as $slug) {
			if (strpos($page_slug, $slug) !== false) {
				$is_match = true;
				break;
			}
		}

		if ($is_match) {
			return 'is-active';
		}

		return '';
	} elseif ( strpos($page_slug, $nav_slug) !== false ){
		return 'is-active';
	}

	return '';
}