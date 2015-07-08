<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arResult){?>
	<nav>
		<ul>
			<?foreach($arResult as $arItem){?>
				<li <?if(!empty($arItem['SELECTED'])){?>class="active"<?}?>>
					<a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a>
				</li>
			<?}?>
		</ul>
	</nav>
<?}?>