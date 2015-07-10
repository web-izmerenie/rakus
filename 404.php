<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define('NO_FORM', 'Y');
define('NO_CONTACTS_BOTTOM', 'Y');

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Такой страницы нет");?>

<div class="block_error">
	<div class="error">
		<span>Такой страницы нет</span>
	</div>
</div>
<div class="breadcrumbs-btn">
	<ul>
		<li>
			<a href="/">На главную</a>
		</li>
		<li>
			<a href="/kompressory/">Компрессоры</a>
		</li>
		<li>
			<a href="/dop-oborudovanie/">Доп. Оборудование</a>
		</li>
	</ul>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>