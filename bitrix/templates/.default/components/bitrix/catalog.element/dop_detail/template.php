<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<?if($arResult){
	$photo = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>505, 'height'=>505), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());?>
	<div class="item_details">
		<div class="container">
			<div class="title clearfix">
				<div class="inr_left">
					<h1><?=$arResult['NAME']?></h1>
				</div>
				<div class="inr_right">
					<a href="<?=$APPLICATION->GetCurDir();?>" class="border_btn" onclick="yaCounter31689301.reachGoal('CATALOG_BACK');">Каталог →</a>
				</div>
			</div>
			<div class="item_details_center clearfix">
				<div class="inr_left">
					<div class="image"><img src="<?=$photo['src'];?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>" /></div>
				</div>
				<div class="inr_right">
					<ul class="list_desc">
						<?foreach($arResult['PROPERTIES']['ATT_CHARSET']['VALUE'] as $k=>$arChar){?>
							<li>
								<span><?=$arResult['PROPERTIES']['ATT_CHARSET']['DESCRIPTION'][$k]?></span> 
								<?=$arChar;?>
							</li>
						<?}?>
					</ul>
				</div>
			</div>
		</div>
		<div class="btn_buy">
			<span class="price">от <?=$arResult['PROPERTIES']['ATT_PRICE']['VALUE']?> руб.</span>
			<a href="#" class="popupOpen border_btn" onclick="yaCounter31689301.reachGoal('BUTTON_RENT_DETAIL_DOP');">АРЕНДОВАТЬ</a>
		</div>

		<div class="type_work type_work_2">
			<div class="container">
				<h3>описание:</h3>
				<div class="colums clearfix">
					<p><?=$arResult['DETAIL_TEXT'];?></p>
				</div>
			</div>
		</div>
	</div>
<?}?>