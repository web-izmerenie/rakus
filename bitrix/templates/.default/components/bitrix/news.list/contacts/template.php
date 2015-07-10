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
$this->setFrameMode(true);
?>
<?if($arResult['ITEMS']){?>
	<div class="container">
		<?foreach($arResult['ITEMS'] as $arItem){?>
			<div class="contacts_block">
				<div class="contact_block-wrap">
					<h1>Контакты</h1>
					<p><?=$arItem['PROPERTIES']['ATT_ADRES']['~VALUE']['TEXT'];?></p>
					<span>
						<?$last = count($arItem['PROPERTIES']['ATT_TEL']['VALUE']) - 1;
						foreach($arItem['PROPERTIES']['ATT_TEL']['VALUE'] as $k=>$arTel){?>
							<a href="tel:<?=$arTel?>"><?=$arTel?></a><?if($last !== $k){?>,<?}?>
						<?}?>
					</span>
					<p><a href="mailto:<?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE']?>">
						<?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE']?></a></p>
				</div>
			</div>
		<?}?>
	</div>
<?}?>