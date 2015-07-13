<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/dop-oborudovanie/(.*?).html(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/dop-oborudovanie/detail.php",
	),
	array(
		"CONDITION" => "#^/kompressory/(.*?).html(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/kompressory/detail.php",
	),
);

?>