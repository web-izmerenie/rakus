<?require_once($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/class.phpmailer.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(!empty($_POST)){
	$mail_body = '<ul>
					<li>'.$_POST['name'].'</li>
					<li>'.$_POST['tel'].'</li>
					<li>'.$_POST['model'].'</li>
				</ul>';
	$title = 'Заявка от '.$_POST['name'];
	$email_adres = COption::GetOptionString("main", "all_bcc");

	/*запись данных в инфоблок*/
	$arLoadArray = Array( "MODIFIED_BY" => $USER->GetID(),
		"IBLOCK_SECTION_ID" => 2,
		"IBLOCK_ID" => 2,
		"NAME" => $title,
		"ACTIVE" => "N",
		"DETAIL_TEXT" => $mail_body,
		);
	CModule::IncludeModule("iblock");
	$element = new CIBlockElement;
	if($product_ID = $element->Add($arLoadArray)){
		/*отправка формы*/
		$mail = new PHPMailer;
		$mail->From = "no-replay@rakus.ru";
		$mail->FromName = "no-replay";
		$mail->AddAddress($email_adres);
		$mail->isHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Subject = $title;
		$mail->Body = $mail_body;
		if($mail->Send()){
			  return true;
			}
		}
}