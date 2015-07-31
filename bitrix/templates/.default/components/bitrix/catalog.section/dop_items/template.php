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
<?if($arResult['ITEMS']){?>
	<div class="catalog_list">
		<div class="container">
			<div class="title clearfix">
				<h1><?$APPLICATION->ShowTitle(false);?></h1>
			</div>

			<table class="equipment_table">
				<thead>
					<tr>
						<td class="td_1">&nbsp;</td>
						<td class="td_2">Наименование</td>
						<td class="td_3">Стоимость</td>
						<td class="td_4">&nbsp;</td>
					</tr>
				</thead>
				<tbody>
					<?foreach($arResult['ITEMS'] as $arItem){
					$photo = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>137, 'height'=>137), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());?>
						<tr>
							<td class="td_1">
								<a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
									<img src="<?=$photo['src'];?>" alt="<?=$arItem['DETAIL_PICTURE']['ALT']?>" />
								</a>
							</td>
							<td class="td_2"><a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="name"><?=$arItem['NAME'];?></a></td>
							<td class="td_3">от <?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'];?> руб.</td>
							<td class="td_4"><a href="#" class="border_btn popupOpen" onclick="yaCounter31689301.reachGoal('BUTTON_RENT_ITEMS_DOP'); return true;">АРЕНДОВАТЬ</a></td>
						</tr>
					<?}?>
				</tbody>
			</table>
		</div>
	</div>
<?}?>
