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



<div class="row team-cards">

	 <div class="col-12 row team-cards_wrapper">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<div class="col-md-5 col-sm-6 col-10">
				<a class="specialty-card open-popup-link" href="#team-cards_popUp" data-info="<?=$arItem["ID"]?>" data-effect="mfp-zoom-in">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
					<span class="specialtyName"><?echo $arItem["NAME"]?></span>
					<span class="specialty"><?echo $arItem["PROPERTIES"]["SPEC"]["VALUE"]?></span>
				</a>
			</div>

		<?endforeach;?>
	</div>
	<a class="action-block btn" href="/contacts/">
		 contact us
	</a>
</div>