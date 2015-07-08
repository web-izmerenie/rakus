				<div class="contact_block">
					<div class="text">Быстрая Аренда</div>
					<div class="phone">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.detail",
							"phone_head",
							array(
								"IBLOCK_TYPE" => "services",
								"IBLOCK_ID" => "1",
								"ELEMENT_ID" => "1",
								"ELEMENT_CODE" => "",
								"CHECK_DATES" => "Y",
								"FIELD_CODE" => array(
									0 => "",
									1 => "undefined",
									2 => "",
								),
								"PROPERTY_CODE" => array(
									0 => "",
									1 => "undefined",
									2 => "",
								),
								"IBLOCK_URL" => "",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"AJAX_OPTION_HISTORY" => "N",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "36000000",
								"CACHE_GROUPS" => "Y",
								"SET_TITLE" => "N",
								"SET_BROWSER_TITLE" => "N",
								"BROWSER_TITLE" => "-",
								"SET_META_KEYWORDS" => "N",
								"META_KEYWORDS" => "-",
								"SET_META_DESCRIPTION" => "N",
								"META_DESCRIPTION" => "-",
								"SET_STATUS_404" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"ADD_SECTIONS_CHAIN" => "N",
								"ADD_ELEMENT_CHAIN" => "N",
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"USE_PERMISSIONS" => "N",
								"DISPLAY_DATE" => "Y",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "Y",
								"USE_SHARE" => "N",
								"PAGER_TEMPLATE" => ".default",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "Страница",
								"PAGER_SHOW_ALL" => "N",
								"AJAX_OPTION_ADDITIONAL" => ""
							),
							false
						);?>
						<span class="ieb">Ответим на все ваши вопросы. <br />Подберем нужное оборудование</span>
					</div>
				</div>
				
				<div class="help_block">
					<form method="post" action="/ajax/application.php">
						<div class="text">
							<p>Если вы не уверены в выборе или не нашли, что искали, опишите здесь свою проблему, а мы подготовим для вас предложение и сами с вами свяжемся. </p>
							<p>Не забудте указать контактную информацию!</p>
							 <textarea name="area"></textarea>
						</div>
						<div class="send">
							<input type="submit" value="Отправить" class="border_btn border_btn-sub">
							<span class="ieb">Ответим в течение часа</span>
						</div>
					</form>	
				</div>

			</div>		
			
		  	<footer>
		  		<div class="container">
		  			<a href="http://web-izmerenie.ru/" class="dev ieb">Сделано <span>в</span></a>
		  		</div>
		  	</footer>   

		</div>

        <div class="popupForm">

            <div class="sendForm">
                <form method="post" action="/ajax/rent.php">
                    <input type="text" name="name" value="Ваше имя" id="name-input" class="inp1 placeholder-1" />
                    <input type="text" name="tel" value="Телефон или почта" id="phone-mail" class="inp2 placeholder-2" />
					<input type="hidden" name="model" value="Модель не указана" />
                    <input type="submit" value="Отправить" class="border_btn sub-btn" />
                </form>
            </div>

        </div>

        <div class="popupForm2">

            <div class="popupError">
                <div class="error-icon">
                    <img src="<?=$tplPath;?>images/error-icon.png" alt=""/>
                </div>
                <span>Вы забыли ввести<br/>информацию о заказе</span>
                <a href="#" class="error-btn">закрыть</a>
            </div>

            <div class="popupError2">
                <div class="wrap-error">
                    <h2>Спасибо за заявку.</h2>
                    <p>Мы ответим<br/>Вам в течение часа.</p>
                </div>
                <a href="#" class="error-btn">закрыть</a>
            </div>

        </div>
    </body>
</html>
