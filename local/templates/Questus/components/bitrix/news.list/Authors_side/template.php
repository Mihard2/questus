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


<form method="GET">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<input type="checkbox" name="author[]" value="<?=$arItem['ID']?>" />
	<div><?echo $arItem["NAME"]?></div>
<?endforeach;?>
	<button type="submit">Filter</button>
</form>


<?/*?>
	<a href="?<?=$_SERVER["QUERY_STRING"]?>&author=<?=$arItem['ID']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
		<div class="authors-name"><?echo $arItem["NAME"]?></div>
		<div class="authors-profession"><?=$arItem["PROPERTIES"]["SPEC"]["VALUE"]?></div>
	</a>
<?*/?>