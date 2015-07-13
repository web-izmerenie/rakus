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
$photo = CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>540, 'height'=>272), BX_RESIZE_IMAGE_PROPORTIONAL, true, array());?>
	<div class="item_details">
		<div class="container">
			<div class="title clearfix">
				<div class="inr_left">
					<h1><?=$arResult['NAME'];?></h1>
					<h3><?=$arResult['PROPERTIES']['ATT_VIEW']['VALUE'];?> компрессор</h3>
				</div>
				<div class="inr_right">
					<a href="<?=$APPLICATION->GetCurDir();?>" class="border_btn">Каталог →</a>
				</div>
			</div>
			<div class="item_details_center clearfix">
				<div class="inr_left">
					<div class="image"><img src="<?=$photo['src'];?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>" /></div>
				</div>
				<div class="inr_right">
					<ul class="list_desc"> 
						<li><span>Рабочее давление</span><?=$arResult['PROPERTIES']['ATT_PRESSURE']['VALUE'];?> бар</li>
						<li><span>Производительность</span><?=$arResult['PROPERTIES']['ATT_PERFOMANCE']['VALUE'];?> м³/мин</li>
						<li><span>Количество постов</span><?=$arResult['PROPERTIES']['ATT_POST']['VALUE'];?> ¾</li>
						<li><span>Расход ДТ</span><?=$arResult['PROPERTIES']['ATT_EXPENSE']['VALUE'];?> л/ч</li>
						<li>
							<span>Размеры</span>
							<?=$arResult['PROPERTIES']['ATT_LENGTH']['VALUE'];?> / 
							<?=$arResult['PROPERTIES']['ATT_WIDTH']['VALUE'];?> /
							<?=$arResult['PROPERTIES']['ATT_HEIGHT']['VALUE'];?> мм
						</li>
						<li><span>Емкость топливного бака</span><?=$arResult['PROPERTIES']['ATT_FUEL']['VALUE'];?> л</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="btn_buy">
			<span class="price">от <?=$arResult['PROPERTIES']['ATT_PRICE']['VALUE'];?> руб.</span>
			<a href="#" class="popupOpen border_btn">АРЕНДОВАТЬ</a>
		</div>

		<div class="type_work">
			<div class="container">
				<h3>Основные виды работ</h3>
				<div class="colums clearfix">
					<?foreach($arResult['MAIN_WORK'] as $work){?>
						<ul>
							<?foreach($work as $val){?>
								<li><?=$val['NAME'];?></li>
							<?}?>
						</ul>
					<?}?>
				</div>
			</div>
		</div>
	</div>
<?}?>