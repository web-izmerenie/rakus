<?define('SALE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Купить компрессор");
?>
<section class="sale_block">
	<div class="wrapper">
		<h1>Купить компрессор</h1>
		<h2>на время — выгодно!</h2>
		<ul>
			<li>
				<img src="/bitrix/templates/main/images/sale1.png">
				<span>1.</span>
				<p>Вы не расходуете большие деньги на приобретение компрессора</p>
			</li>
			<li>
				<img src="/bitrix/templates/main/images/sale2.png">
				<span>2.</span>
				<p>Вы не тратите средств на его обслуживание, ремонт и хранение</p>
			</li>
			<li>
				<img src="/bitrix/templates/main/images/sale3.png">
				<span>3.</span>
				<p>Вы не платите транспортный и имущественный налоги на оборудование</p>
			</li>

		</ul>
	</div>
</section>
<section class="sale_block2">
	<span>Вы платите </span>
	<p>только за время работы</p>
	<span>компрессора</span>
</section>
<section class="sale_block3">
	<ul>
		<li>
			<p>Экономьте</p>
			<span>Направьте съэкономленные средства на другие направления вашей деятельности</span>
		</li>
		<li>
			<p>Делайте больше!</p>
			<span>Увеличьте объемы производства, уменьшив время выполнения поставленной задачи — можно арендовать не один, а сразу несколько компрессоров</span>
		</li>
		<li>
			<p>Делайте лучше</p>
			<span>Используйте высокотехнлогичное и современное оборудование для выполнения даже небольших задач</span>
		</li>

	</ul>
</section>
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
