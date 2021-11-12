<?php
$res = array();
$prevKeyOne = -1;
$prevKeyTwo = -1;
$prevKeyThree = -1;
$prevKeyFour = -1;
foreach ($arResult as $k => $v){
	if($v['DEPTH_LEVEL'] == 1){
		$prevKeyTwo = -1;
		$prevKeyThree = -1;
		$prevKeyFour = -1;
		$res[] = $v;
		$prevKeyOne++;
	}elseif ($v['DEPTH_LEVEL'] == 2){
		$res[$prevKeyOne]['ITEMS'][] = $v;
		$prevKeyTwo++;
	}elseif ($v['DEPTH_LEVEL'] == 3){
		$res[$prevKeyOne]['ITEMS'][$prevKeyTwo]['ITEMS'][] = $v;
		$prevKeyThree++;
	}elseif ($v['DEPTH_LEVEL'] == 4){
		$res[$prevKeyOne]['ITEMS'][$prevKeyTwo]['ITEMS'][$prevKeyThree]['ITEMS'][] = $v;
		$prevKeyFour++;
	}
}
$arResult = $res;
?>