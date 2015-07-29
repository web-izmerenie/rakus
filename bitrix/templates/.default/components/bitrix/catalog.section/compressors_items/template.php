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

			<table class="catalog_table">
				<thead>
					<tr>
						<td class="td_1">&nbsp;</td>
						<td class="td_2">Наименование</td>
						<td class="td_3">Давление</td>
						<td class="td_4">Производит.</td>
						<td class="td_5">Стоимость</td>
						<td class="td_6">&nbsp;</td>
					</tr>
				</thead>
				<tbody>
					<?foreach($arResult['ITEMS'] as $arItem){
					$photo = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>150, 'height'=>85), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
						<tr>
							<td class="td_1">
								<a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
									<img src="<?=$photo['src'];?>" alt="<?=$arItem['DETAIL_PICTURE']['ALT']?>" />
								</a>
							</td>
							<td class="td_2"><a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="name"><?=$arItem['NAME'];?></a></td>
							<td class="td_3"><?=$arItem['PROPERTIES']['ATT_PRESSURE']['~VALUE'];?> бар.</td>
							<td class="td_4"><?=$arItem['PROPERTIES']['ATT_PERFOMANCE']['VALUE'];?> м³/ мин.</td>
							<td class="td_5">от <?=$arItem['PROPERTIES']['ATT_PRICE']['VALUE'];?> руб.</td>
							<td class="td_6"><a href="#" class="border_btn popupOpen">АРЕНДОВАТЬ</a></td>
						</tr>
					<?}?>
				</tbody>
			</table>
		</div>
	</div>
<?}?>
