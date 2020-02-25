<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>


  <footer class="mainFooter">
      <div class="container team-cards_popUp-block white-popup mfp-hide" id="team-cards_popUp">
       <?
      $GLOBALS['arrfliter'] = array("ID"=>$arResult['ITEMS']['ID']);
     $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"AuthorsPopup",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILE_404" => "",
		"FILTER_NAME" => "arrfliter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("EDU","IN_URL","WORK","BLOG_URL","SPEC","CAST_URL",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
     </div>

     
    <section class="container">
        <div class="row footer">
            <div class="socialNetworks col-xl-1 col-md-2 col-sm-3">
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

            </div>
        </div>
    </section>
</footer>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/jQuery3.4.1.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/jquery.magnific-popup.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/slick.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/static/js/main.js"></script>
</body>

</html>
