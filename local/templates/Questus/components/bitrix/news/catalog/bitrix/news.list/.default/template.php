<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
	<div class="posts">
	<div class="row">
	
<div class="col-12 catalog">
<article class="sliders-block">


<h3 class="title">Content</h3>

<div class="button-block button-block_slider">
 		<a href="/catalog/?cat=BLOG" class="<? if (isset($_GET["cat"]) && $_GET["cat"] === "BLOG"): ?>btn-active<?endif;?>">blog</a> 
		<a href="/catalog/?cat=PODCAST" class="<? if (isset($_GET["cat"]) && $_GET["cat"] === "PODCAST"): ?>btn-active<?endif;?>">podcast</a>
 		<a href="/catalog/?cat=VIDEO" class="<? if (isset($_GET["cat"]) && $_GET["cat"] === "VIDEO"): ?>btn-active<?endif;?>">video</a>
</div>


	<div class="slider-wrap">
		<div class="prevArrowBg arrowBg">
		</div>
		<div class="nextArrowBg arrowBg">
		</div>
		<div class="slider">

			<?if ($arResult["ITEMS"]):?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>

						<a class="slide-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
							<h4><?=TruncateText($arItem["NAME"], 75)?></h4>
							<div class="infoDate">
									<time><?=$arItem["DISPLAY_ACTIVE_FROM"]?></time>
									<div class="name"><?=$arItem["DISPLAY_PROPERTIES"]["AUTHOR"]["LINK_ELEMENT_VALUE"][$arItem["DISPLAY_PROPERTIES"]["AUTHOR"]["VALUE"]]["NAME"]?></div>
							</div>
							<div class="shortDesc"><?=$arItem["PREVIEW_TEXT"];?></div>
						</a>
				
				<?endforeach;?>
			<?endif;?>
				
		</div>
	</div>
</article>


</div>


<div class="container">
	<aside class="col-md-12 filters row" id="aside1">

		<article class="authors col-md-4">
			<div class="authors-title openBlock">authors</div>
			<div class="closeBlock">
					<div class="authorsBlocks">
					<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"Authors_side",
		array(
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
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "Blog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "5",
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
		"PROPERTY_CODE" => array(
			0 => "SPEC",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "Authors_side"
		),
		false
		);?>
					</div>
			</div>
		</article>

		<article class="search col-md-4">
		<div class="search_title openBlock" id="search">search</div>
		<div class="closeBlock">
				<form action="/search/" method="GET">
						<input type="search" name="q" id="" placeholder="Enter keyword search...">
						<button type="submit"><i class='icon-search'></i></button>
				</form>
		</div>
		</article>

		<article class="col-md-4">
		<?$APPLICATION->IncludeComponent(
	"bitrix:search.tags.cloud", 
	"tags", 
	array(
		"COMPONENT_TEMPLATE" => "tags",
		"SORT" => "NAME",
		"PAGE_ELEMENTS" => "150",
		"PERIOD" => "",
		"URL_SEARCH" => "",
		"TAGS_INHERIT" => "Y",
		"CHECK_DATES" => "Y",
		"FILTER_NAME" => "",
		"arrFILTER" => array(
			0 => "iblock_Blog",
		),
		"arrFILTER_iblock_Blog" => array(
			0 => "6",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"PERIOD_NEW_TAGS" => "",
		"SHOW_CHAIN" => "Y",
		"COLOR_TYPE" => "Y",
		"WIDTH" => "100%"
	),
	false
);?>
		</article>
	</aside>
</div>

</section>
</div>
</div>
</div>
