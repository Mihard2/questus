<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$tag = $_POST["user"];
$GLOBALS['tagFilter'] = array("ID"=>$tag);
?>


<div class="container">
   <div class="row">


      <?$APPLICATION->IncludeComponent(
         "bitrix:news.list",
         "AuthorsPopup",
         Array(
             "COMPONENT_TEMPLATE" => "projects_ajax",
             "IBLOCK_TYPE" => "news",
             "IBLOCK_ID" => "7",
             // "ELEMENT_ID" => $_POST["user"],
             "ELEMENT_CODE" => "",
             "CHECK_DATES" => "Y",
             // "FIELD_CODE" => array(0=>"NAME",1=>"DETAIL_TEXT",2=>"DETAIL_PICTURE"),
             "PROPERTY_CODE" => array(
               0 => "EDU",
               1 => "IN_URL",
               2 => "WORK",
               3 => "BLOG_URL",
               4 => "SPEC",
               5 => "CAST_URL",
               6 => "",
             ),
             "IBLOCK_URL" => "",
             "FILTER_NAME" => "tagFilter",
             "DETAIL_URL" => "",
             "AJAX_MODE" => "N",
             "AJAX_OPTION_JUMP" => "N",
             "AJAX_OPTION_STYLE" => "Y",
             "AJAX_OPTION_HISTORY" => "N",
             "AJAX_OPTION_ADDITIONAL" => "",
             "CACHE_TYPE" => "A",
             "CACHE_TIME" => "36000000",
             "CACHE_GROUPS" => "Y",
             "SET_TITLE" => "Y",
             "SET_CANONICAL_URL" => "N",
             "SET_BROWSER_TITLE" => "Y",
             "BROWSER_TITLE" => "-",
             "SET_META_KEYWORDS" => "Y",
             "META_KEYWORDS" => "-",
             "SET_META_DESCRIPTION" => "Y",
             "META_DESCRIPTION" => "-",
             "SET_LAST_MODIFIED" => "N",
             "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
             "ADD_SECTIONS_CHAIN" => "Y",
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
             "DISPLAY_BOTTOM_PAGER" => "Y",
             "PAGER_TITLE" => "Страница",
             "PAGER_SHOW_ALL" => "N",
             "PAGER_BASE_LINK_ENABLE" => "N",
             "SET_STATUS_404" => "N",
             "SHOW_404" => "N",
             "MESSAGE_404" => "",
             "S_ASK_QUESTION" => "",
             "S_ORDER_PROJECT" => "",
             "T_GALLERY" => "",
             "T_DOCS" => "",
             "T_PROJECTS" => "",
             "T_CHARACTERISTICS" => ""
          )
      );?>
   </div>
</div>
