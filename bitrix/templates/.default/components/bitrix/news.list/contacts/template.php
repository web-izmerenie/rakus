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
	<div class="container contacts">
		<h1>Контакты</h1>
		<?foreach($arResult['ITEMS'] as $k => $arItem){?>
			<div class="contacts_block">
				<div class="contact_block-wrap">
					<p><?=$arItem['PROPERTIES']['ATT_ADRES']['~VALUE']['TEXT'];?></p>
					<span>
						<?$last = count($arItem['PROPERTIES']['ATT_TEL']['VALUE']) - 1;
						foreach($arItem['PROPERTIES']['ATT_TEL']['VALUE'] as $k=>$arTel){?>
							<a href="tel:<?=$arTel?>"><?=$arTel?></a><?if($last !== $k){?>,<?}?>
						<?}?>
					</span>
					<p><a href="mailto:<?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE']?>">
						<?=$arItem['PROPERTIES']['ATT_MAIL']['VALUE']?></a></p>
					<?if($k === 1){?>
						<a class="revezity" href="/upload/revezity.pdf" target="_blank">Реквизиты</a>
					<?}?>
				</div>
			</div>
		<?}?>
	</div>
<?}?>
