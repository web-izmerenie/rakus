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
	<div class="item_next_prev">
		<div class="container clearfix">
			<div class="next">
				<div id="slider1">
					<a class="buttons prev" href="#"></a>
					<div class="viewport">
						<ul class="overview">
							<?$arResult['ITEMS'] = array_chunk($arResult['ITEMS'], 2);
						 	foreach($arResult['ITEMS'] as $arSection){?>
								<li>
									<?foreach($arSection as $arItem){
									$photo = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>90, 'height'=>50), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());?>
										<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="ieb">
											<img src="<?=$photo['src']?>" alt="<?=$arItem['DETAIL_PICTURE']['ALT'];?>" />
											<span><span><?=$arItem['NAME'];?></span></span>
										</a>
									<?}?>
								</li>
							<?}?>
						</ul>
						
					</div>
					<a class="buttons next" href="#"></a>
				</div>
			</div>

		</div>
	</div>
<?}?>