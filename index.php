<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Rakus");
$APPLICATION->SetTitle("Rakus");
?><div class="main_block_1">
	<h1>Аренда компрессоров</h1>
	<h3>под любые задачи</h3>
	<ul>
		<li>
			<div class="main-block">
				<div class="image"><img src="<?=$tplPath?>images/icon-1.png" alt="" /></div>
				<div class="title"><span>Быстро</span></div>
			</div>
			<div class="hover_text"><span>Вы позвонили — мы приехали. Оформление договора аренды у вас на объекте без дополнительных согласований.</span>
			</div>
		</li>
		<li>
			<div class="image"><img src="<?=$tplPath?>images/icon-2.png" alt="" />
			</div>
			<div class="hover_text"><span>Доставим оборудование на объект в сжатые сроки. По Ростову-на-Дону и Краснодару — в течение 2 часов.</span>
			</div>
			<div class="title"><span>Просто</span></div>
		</li>
		<li>
			<div class="image"><img src="<?=$tplPath?>images/icon-3.png" alt="" /></div>
			<div class="hover_text"><span>Вы платите за работу оборудования — обслуживание берём на себя.</span>
			</div>
			<div class="title"><span>Выгодно</span></div>
		</li>
	</ul>
</div>

<div class="main_catalog">
	<div class="container">
		<h3>Наши компрессоры почищены, Проверены <br />и готовы к работе</h3>
		<ul class="clearfix">
			<li><span><a href="/kompressory"><img src="<?=$tplPath;?>images/item-1.jpg" alt="" /></a></span></li>
			<li><span><a href="/kompressory"><img src="<?=$tplPath;?>images/item-2.jpg" alt="" /></a></span></li>
			<li><span><a href="/kompressory"><img src="<?=$tplPath;?>images/item-3.jpg" alt="" /></a></span></li>
			<li><span><a href="/kompressory"><img src="<?=$tplPath;?>images/item-4.jpg" alt="" /></a></span></li>
			<li><span><a href="/kompressory"><img src="<?=$tplPath;?>images/item-2.jpg" alt="" /></a></span></li>
			<li><span><a href="/kompressory"><img src="<?=$tplPath;?>images/item-5.jpg" alt="" /></a></span></li>
			<li><span><a href="/kompressory"><img src="<?=$tplPath;?>images/item-1.jpg" alt="" /></a></span></li>
			<li><span><a href="/kompressory"><img src="<?=$tplPath;?>images/item-3.jpg" alt="" /></a></span></li>
		</ul>		
		<div class="all">
			<a href="/kompressory" class="border_btn">Каталог →</a>
		</div>			
	</div>
</div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>