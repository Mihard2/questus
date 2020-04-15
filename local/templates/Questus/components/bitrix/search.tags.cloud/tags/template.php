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
	<article class="tags-filter">
		<div class="tags-filter_title openBlock">tags</div>
		<div class="tags-filter_block">
			<?
			if($arParams["SHOW_CHAIN"] != "N" && !empty($arResult["TAGS_CHAIN"])):
			?>
				<noindex class="tagActive_wrapper">
					<div class="search-tags-chain tagActive"><?
						foreach ($arResult["TAGS_CHAIN"] as $tags):
							?><a class="search-tags-text" href="<?=$tags["TAG_PATH"]?>" rel="nofollow"><?=$tags["TAG_NAME"]?></a> <?
							?><a href="<?=$tags["TAG_WITHOUT"]?>" class="search-tags-link" rel="nofollow"><span></span></a>  <?
						endforeach;?>
					</div>
				</noindex>
			<?
			endif;

			if(is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])):
			?>
				<noindex>	
					<? foreach ($arResult["SEARCH"] as $key => $res) { 
						?> <label class="search-tags-chain">
							<a class="search-tags-text" href="<?=$res["URL"]?>"  rel="nofollow"><?=$res["NAME"]?></a> 
						</label><?
					}?>
				</noindex>
			<?
			endif;
			?>
		</div>
	</article>
