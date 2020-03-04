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
	<!-- <div class="pageTitle container"></div> -->
	<div class="container posts">
	<div class="row">
	
<div class="col-12 catalog">
<article class="sliders-block">

<div>
	<span class="Autor">
		<? if (isset($_GET["cat"])): ?>
			This category: <? echo $_GET["cat"];?>
		<?endif;?>
	</span>
	<span class="Group">
		<? if (isset($_GET["tags"])): ?>
			Tags filter: <? echo $_GET["tags"];?>
		<?endif;?>
	</span>
	<span class="Tag">
		<? if (isset($_GET["author"])): ?>
			Author filter: <? echo $_GET["author"];?>
		<?endif;?>
	</span>
</div>

<h3 class="title">CATALOG</h3>


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



<aside class="col-md-12 filters row" id="aside1">

<article class="authors col-md-3">
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

<article class="search col-md-5">
		<div class="search_title openBlock" id="search">searche</div>
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
		"TAGS_INHERIT" => "N",
		"CHECK_DATES" => "N",
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


</section>
</div>
</div>
</div>




<!-- <section class="content col-md-8" id="article">
<?if ($arResult["ITEMS"]):?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

		<article class="post">
				<header>
						<h2><?echo $arItem["NAME"]?></h2>
						<div class="public-info">
								<div class="autor">By
										<span><?=$arItem["DISPLAY_PROPERTIES"]["AUTHOR"]["LINK_ELEMENT_VALUE"][$arItem["DISPLAY_PROPERTIES"]["AUTHOR"]["VALUE"]]["NAME"]?></span>
										from

										<span><?$arItem["DISPLAY_PROPERTIES"]["MATR"]["VALUE"]?></span>

								</div>
								<div class="public-date">Posted
										<span><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
								</div>
						</div>
				</header>
				<div class="content">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">

						<div class="shortDesc"><?=$arItem["PREVIEW_TEXT"]?></div>
						<div class="tags">Tags:
							<?$tags = explode(', ',$arItem["TAGS"])?>
							<?php foreach ($tags as $key => $tag): ?>
									<a href="?tags=<?=$tag?>" class="tag"><?=$tag?></a>
							<?php endforeach; ?>

						</div>
				</div>
				<footer>
				<a href="javascript:void(0)" class="comments">
						<span>10</span>
						comments
				</a>
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="btn">read more</a>
				</footer>
				<div class="borderBottom row"></div>
		</article>
		<?endforeach;?>
<?endif;?>

<div class="nextprev">
		<a href="" class="left">
				<i class="icon-left"></i>
				older posts
		</a>
		<a href="" class="right">
				newer posts
				<i class="icon-right"></i>
		</a>
</div>
</section> -->




<!--
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div> -->