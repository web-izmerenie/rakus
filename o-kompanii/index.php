<?define('NO_FORM', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
<div class="about_block">
	<h1>о компании</h1>
	<p>Компания «Ракурс» — стабильно развивающаяся компания,<Br/>поставляющая воздух  различного назначения для любых видов<br/>работ и отраслей.</p>
</div>

<div class="advantages_block">
	<h2>Наши  приемущества:</h2>
	<ul class="advantage-list">
		<li>
			<div class="advantage-list_img">
				<img src="<?=$tplPath;?>images/advantages-icon1.png" alt=""/>
			</div>
			<span>Заказать просто</span>
			<p>Заявку на аренду<br/>компрессора можно<br/>оформить по<br/>телефону</p>
		</li>
		<li>
			<div class="advantage-list_img">
				<img src="<?=$tplPath;?>images/advantages-icon2.png" alt=""/>
			</div>
			<span>Срочная доставка</span>
			<p>Компрессор доставляется на ваш<br/>объект в течение 2 часов </p>
		</li>
		<li>
			<div class="advantage-list_img">
				<img src="<?=$tplPath;?>images/advantages-icon3.png" alt=""/>
			</div>
			<span>Любые сроки аренды</span>
			<p>Компрессор можно<br/>арендовать на срок от 4<br/>часов (полсмены)</p>
		</li>
	</ul>
	<ul class="advantage-list advantage-list_2">
		<li>
			<div class="<?=$tplPath;?>advantage-list_img">
				<img src="<?=$tplPath;?>images/advantages-icon4.png" alt=""/>
			</div>
			<span>Новейшие технологии</span>
			<p>Вы сможете использовать самое<br/>качественное и экономичное<br/>импортное оборудование даже под<br/>краткосрочные задачи</p>
		</li>
		<li>
			<div class="advantage-list_img">
				<img src="<?=$tplPath;?>images/advantages-icon5.png" alt=""/>
			</div>
			<span>Индивидуальная<br/>цена для каждого клиента</span>
			<p>Мы всегда готовы обсудить<br/>стоимость аренды компрессора,<br/>предоставляя вам оборудование<br/>на  выгодных для обоих сторон<br/>условиях по телефону</p>
		</li>
	</ul>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>