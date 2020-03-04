<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>


  <footer class="mainFooter">
      <div class="container team-cards_popUp-block white-popup mfp-hide mfp-with-anim" id="team-cards_popUp">


     </div>
     
    <section class="container">
        <div class="row footer">

            <div class="col-md-4 footer_menu">
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
            <div class="col-md-4 footer_contacts">
                <div class="footer-title">contacts</div>
            </div>
            <div class="col-md-4 footer_searche">
            </div>

            <!-- <div class="socialNetworks col-xl-1 col-md-2 col-sm-3">
                <a href="https://www.facebook.com/">
                    <i class="icon-facebook"></i>
                </a>
                <a href="http://instagram.com/">
                    <i class="icon-instagram"></i>
                </a>
                <a href="https://www.youtube.com/">
                    <i class="icon-youtube-play"></i>
                </a>
            </div>
            <div class="copyright col-xl-5 col-sm-12">
                <a href="javascript:void(0)">2019 ©. HatFactory Consulting. All Rights Reserved</a>
            </div>
            <div class="col-xl-5 offset-xl-1 col-sm-6 offset-md-4 offset-sm-3 search">
                <form action="/search/" method="GET">
                    <input type="search" name="q" id="" placeholder="Search...">
                    <button type="submit"><i class='icon-search'></i></button>
                </form>

            </div> -->
        </div>
    </section>
</footer>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/jQuery3.4.1.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/jquery.magnific-popup.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/slick.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/main.js?version={version11}"></script>
</body>

</html>
