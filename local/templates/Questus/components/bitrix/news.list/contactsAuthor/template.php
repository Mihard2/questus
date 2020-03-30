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


<div class="row">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<div class="col-md-6">

			<img class="preview_picture"
				src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
				width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
				height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
				style="float:left"
			/>				
			<span class="name"><?echo $arItem["NAME"]?></span>
			<a class="telephone" href="tel:<?=$arItem['PROPERTIES']['TEL']['VALUE']?>"><?=$arItem['PROPERTIES']['TEL']['VALUE']?></a>
			<a class="email" href="mailto:<?=$arItem['PROPERTIES']['EMAIL']['VALUE']?>"><?=$arItem['PROPERTIES']['EMAIL']['VALUE']?></a>
			<div class="position"><?=$arItem['PROPERTIES']['SPEC']['VALUE']?></div>
			<a class="linkedin" href="<?=$arItem['PROPERTIES']['IN_URL']['VALUE']?>" target="_blank">


			</div>
		<?endforeach;?>
</div>

