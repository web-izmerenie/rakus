<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="help_block-btn">
		<div class="container">
			<ul>
				<?foreach($arResult as $arItem){?>
					<li><a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a></li>
				<?}?>
			</ul>
		</div>
	</div>
<?endif?>