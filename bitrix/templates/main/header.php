<?
$tplPath = $APPLICATION->GetTemplatePath();
$currentUrl = $APPLICATION->GetCurPageParam();
global $tplPath;
global $currentUrl;

if(defined('CONTACT'))
	$main_class = 'сontent-contact';
if(defined('ERROR_404'))
	$main_class = 'сontent-404';
if(defined('DOP_CATALOG'))
	$main_class = 'content-item2';
if(defined('SALE'))
	$main_class = 'sale';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js ielt10 ielt9 ielt8 ielt7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7 ielt10 ielt9 ielt8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8 ielt10 ielt9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9 ielt10"> <![endif]-->
<!--[if gt IE 10]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title><?$APPLICATION->ShowTitle(false);?></title>
		<?$APPLICATION->ShowMeta("keywords");?>
		<?$APPLICATION->ShowMeta("description");?>
		<?$APPLICATION->ShowHead();?>
		<meta name="viewport" content="980">
		<link rel="stylesheet" href="<?=$tplPath;?>css/animate.css">
		<link rel="stylesheet" type="text/css" href="<?=$tplPath;?>css/style.css" />

		<script type="text/javascript" src="<?=$tplPath;?>js/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" src="<?=$tplPath;?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?=$tplPath;?>js/backend.js"></script>
		<script type="text/javascript" src="<?=$tplPath;?>js/main.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript" src="<?=$tplPath?>js/jquery.tinycarousel.min.js"></script>
	</head>

	<body>
		<?$APPLICATION->ShowPanel();?>
		<div id="page" class="<?if($currentUrl === '/'){?>main_content<?}else{?>inside_content<?}?>">

			<header class="clearfix">
				<div class="container">
					<a href="/" id="logo"><img src="<?=$tplPath;?>images/logo.png" alt="" /></a>
					<div class="phone">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.detail",
							"phone_head",
							array(
								"IBLOCK_TYPE" => "services",
								"IBLOCK_ID" => "1",
								"ELEMENT_ID" => "1",
								"ELEMENT_CODE" => "",
								"CHECK_DATES" => "Y",
								"FIELD_CODE" => array(
									0 => "",
									1 => "undefined",
									2 => "",
								),
								"PROPERTY_CODE" => array(
									0 => "",
									1 => "undefined",
									2 => "",
								),
								"IBLOCK_URL" => "",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"AJAX_OPTION_HISTORY" => "N",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "36000000",
								"CACHE_GROUPS" => "Y",
								"SET_TITLE" => "N",
								"SET_BROWSER_TITLE" => "N",
								"BROWSER_TITLE" => "-",
								"SET_META_KEYWORDS" => "N",
								"META_KEYWORDS" => "-",
								"SET_META_DESCRIPTION" => "N",
								"META_DESCRIPTION" => "-",
								"SET_STATUS_404" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"ADD_SECTIONS_CHAIN" => "N",
								"ADD_ELEMENT_CHAIN" => "N",
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"USE_PERMISSIONS" => "N",
								"DISPLAY_DATE" => "Y",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "Y",
								"USE_SHARE" => "N",
								"PAGER_TEMPLATE" => ".default",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "Страница",
								"PAGER_SHOW_ALL" => "N",
								"AJAX_OPTION_ADDITIONAL" => ""
							),
							false
						);?>
					</div>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "main", Array(
						"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
								0 => "",
							),
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
							"DELAY" => "Y",	// Откладывать выполнение шаблона меню
							"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						),
						false
					);?>
				</div>
			</header>

			<div id="content" class="clearfix <?=$main_class;?>">
