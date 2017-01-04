<?php
$gridRows = '';
$gridCols = '';


for ($x = 1; $x <= 300; $x++) {
	$gridRows .= '<div class="grid-row"></div>';
}

for ($x = 1; $x <= 8; $x++) {
	$gridCols .= '<div class="grid-col"></div>';
	if($x < 8):
		$gridCols .= '<div class="grid-col grid-col-gutter"></div>';
	endif;
}


$gridWrap  = '<div class="gridWrp">';
$gridWrap .= '<div class="grid-inner">';
$gridWrap .= '<div class="grid-col-wrapper">'.$gridCols.'</div>';
$gridWrap .= '<div class="grid-row-wrapper">'.$gridRows.'</div>';
$gridWrap .= '</div>';
$gridWrap .= '</div>';
echo $gridWrap;