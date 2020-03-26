<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

    </div>
  <footer class="mainFooter">
      <div class="container team-cards_popUp-block white-popup mfp-hide mfp-with-anim" id="team-cards_popUp">


     </div>
     
    <section class="container">
        <div class="row footer">

            <div class="col-md-4 col-5 order-0 order-md-0 footer_menu">
                <div class="footer-title">site map</div>
                 <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_multi", Array(
                	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                		"DELAY" => "N",	// Откладывать выполнение шаблона меню
                		"MAX_LEVEL" => "2",	// Уровень вложенности меню
                		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                			0 => "",
                		),
                		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
                		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                	),
                	false
                );?>
            </div>
            <div class="col-md-4 col-sm-12 order-2 order-md-1 footer_contacts">
                <div class="footer-title">contacts</div>
                <?$APPLICATION->IncludeComponent(
                	"bitrix:main.include",
                	"",
                	Array(
                		"AREA_FILE_SHOW" => "file",
                		"AREA_FILE_SUFFIX" => "inc",
                		"EDIT_TEMPLATE" => "",
                		"PATH" => "/include/footerContacts.php"
                	)
                );?>
            </div>
            <div class="col-md-4 col-7 order-1 order-md-2 footer_search">
                <div class="footer-title">help</div>
                <form action="/search/" method="GET">
						<input type="search" name="q" id="" placeholder="Enter keyword search...">
						<button type="submit"><i class='icon-search'></i></button>
                </form>                
            </div>
        </div>
    </section>
</footer>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/jQuery3.4.1.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/jquery.magnific-popup.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/slick.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY?>"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo SITE_KEY?>', {action: 'homepage'}).then(function(token) {
            console.log(token);
            document.getElementById('g-recaptcha-response').value=token;
        });
    });
</script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/main.js?version={version4}"></script>
    </div>
</body>

</html>
