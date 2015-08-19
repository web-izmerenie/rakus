				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "bottom_text",
						"EDIT_TEMPLATE" => ""
					)
				);?>
				<?if(!defined('NO_CONTACTS_BOTTOM')){?>
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
				<?}?>

				<?if(!defined('NO_FORM')){?>
					<div class="help_block">
						<form method="post" action="/ajax/application.php"
							  <?switch($currentDir){
									case '/':
										echo 'onsubmit="yaCounter31689301.reachGoal(\'SUBMIT_FORM_MAIN\'); return true;"';
										break;
									case '/kompressory/':
										echo 'onsubmit="yaCounter31689301.reachGoal(\'SUBMIT_FORM_KOMPRESSORY\'); return true"';
										break;
									case '/dop-oborudovanie/':
										echo 'onsubmit="yaCounter31689301.reachGoal(\'SUBMIT_FORM_DOP\'); return true"';
										break;
								}?>>
							<div class="text">
								<p>Если вы не уверены в выборе или не нашли, что искали, опишите здесь свою проблему, а мы подготовим для вас предложение и сами с вами свяжемся. </p>
								<p>Не забудте указать контактную информацию!</p>
								 <textarea name="area"
										 <?switch($currentDir){
											case '/':
												echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_MAIN\'); return true;"';
												break;
											case '/kompressory/':
												echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_KOMPRESSORY\'); return true;"';
												break;
											case '/dop-oborudovanie/':
												echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_DOP\'); return true;"';
												break;
										}?>></textarea>
							</div>
							<div class="send">
								<input type="submit" value="Отправить" class="border_btn border_btn-sub"
									   <?switch($currentDir){
											case '/':
												echo 'onclick="yaCounter31689301.reachGoal(\'CLICK_SEND_MAIN\'); return true;"';
												break;
											case '/kompressory/':
												echo 'onclick="yaCounter31689301.reachGoal(\'CLICK_SEND_KOMPRESSORY\'); return true;"';
												break;
											case '/dop-oborudovanie/':
												echo 'onclick="yaCounter31689301.reachGoal(\'CLICK_SEND_DOP\'); return true;"';
												break;
										}?>>
								<span class="ieb">Ответим в течение часа</span>
							</div>
						</form>
					</div>
				<?}?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom_menu",
					Array(
						"ROOT_MENU_TYPE" => "left",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(""),
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"DELAY" => "Y",
						"ALLOW_MULTI_SELECT" => "N"
					)
				);?>
			</div>
		  	<footer>
		  		<div class="container">
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "footer_link_doc", Array(
						"IBLOCK_TYPE" => "services",	// Тип информационного блока (используется только для проверки)
							"IBLOCK_ID" => "7",	// Код информационного блока
							"NEWS_COUNT" => "20",	// Количество новостей на странице
							"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
							"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
							"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
							"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
							"FILTER_NAME" => "",	// Фильтр
							"FIELD_CODE" => array(	// Поля
								0 => "",
								1 => "undefined",
								2 => "",
							),
							"PROPERTY_CODE" => array(	// Свойства
								0 => "",
								1 => "undefined",
								2 => "",
							),
							"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
							"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
							"AJAX_MODE" => "N",	// Включить режим AJAX
							"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
							"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
							"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
							"CACHE_TYPE" => "A",	// Тип кеширования
							"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
							"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
							"CACHE_GROUPS" => "Y",	// Учитывать права доступа
							"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
							"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
							"SET_TITLE" => "N",	// Устанавливать заголовок страницы
							"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
							"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
							"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
							"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
							"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
							"PARENT_SECTION" => "",	// ID раздела
							"PARENT_SECTION_CODE" => "",	// Код раздела
							"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
							"DISPLAY_DATE" => "Y",	// Выводить дату элемента
							"DISPLAY_NAME" => "Y",	// Выводить название элемента
							"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
							"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
							"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
							"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
							"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
							"PAGER_TITLE" => "Новости",	// Название категорий
							"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
							"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
							"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
						),
						false
					);?>
		  			<a href="http://web-izmerenie.ru/" class="dev ieb">Сделано <span>в</span></a>
		  		</div>
		  	</footer>

		</div>

        <div class="popupForm">

            <div class="sendForm">
                <form method="post" action="/ajax/rent.php"
					  <?switch($currentUrl){
							case '/kompressory/':
								echo 'onsubmit="yaCounter31689301.reachGoal(\'SUBMIT_RENT_KOMPRESSORY\'); return true"';
								break;
							case '/dop-oborudovanie/':
								echo 'onsubmit="yaCounter31689301.reachGoal(\'SUBMIT_RENT_DOP\'); return true"';
								break;
							default:
								echo 'onsubmit="yaCounter31689301.reachGoal(\'SUBMIT_DETAIL_RENT\'); return true"';
						}?>>
                    <input type="text" name="name" value="Ваше имя" id="name-input" class="inp1 placeholder-1"
						   <?switch($currentUrl){
								case '/kompressory/':
									echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_RENT_KOMPRESSORY\'); return true"';
									break;
								case '/dop-oborudovanie/':
									echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_RENT_DOP\'); return true"';
									break;
								default:
									echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_DETAIL_RENT\'); return true"';
							}?>/>
                    <input type="text" name="tel" value="Телефон или почта" id="phone-mail" class="inp2 placeholder-2"
						    <?switch($currentUrl){
								case '/kompressory/':
									echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_RENT_KOMPRESSORY\'); return true"';
									break;
								case '/dop-oborudovanie/':
									echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_RENT_DOP\'); return true"';
									break;
								default:
									echo 'onclick="yaCounter31689301.reachGoal(\'INPUT_DETAIL_RENT\'); return true"';
							}?>/>
					<input type="hidden" name="model" value="Модель не указана" />
                    <input type="submit" value="Отправить" class="border_btn sub-btn"
						   <?switch($currentUrl){
								case '/kompressory/':
									echo 'onclick="yaCounter31689301.reachGoal(\'SENT_RENT_KOMPRESSORY\'); return true"';
									break;
								case '/dop-oborudovanie/':
									echo 'onclick="yaCounter31689301.reachGoal(\'SENT_RENT_DOP\'); return true"';
									break;
								default:
									echo 'onclick="yaCounter31689301.reachGoal(\'SENT_DETAIL_RENT\'); return true"';
							}?>/>
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
		<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter31689301 = new Ya.Metrika({ id:31689301, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/31689301" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    </body>
</html>
