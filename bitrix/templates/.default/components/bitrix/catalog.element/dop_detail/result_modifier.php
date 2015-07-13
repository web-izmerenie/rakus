<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach($arResult['PROPERTIES']['ATT_MAIN_WORK']['VALUE'] as $val){
	$arResult['MAIN_WORK'][] = GetIBlockElement($val);
}

$count = count($arResult['MAIN_WORK']) / 2;
$arResult['MAIN_WORK'] = array_chunk($arResult['MAIN_WORK'], $count);